<?php

namespace App\Http\Controllers\Backend\Fetch;

use App\Models\Post;
use App\Models\FakeUser;
use App\Models\SourceUrl;
use App\Models\PostContent;
use Illuminate\Http\Request;
use App\Models\ScrapingFailed;
use Spatie\Browsershot\Browsershot;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class AppleScrapController extends Controller
{

    public function AppleScraper(Request $request)
    {

        $start  = (!empty($request->start)) ? $request->start : 0;
        $end    = (!empty($request->end)) ? $request->end : 999999999999999999;
        $refKey = (!empty($request->refKey)) ? $request->refKey : null;

        if (empty($refKey)) {
            dd("Please Enter '?&refKey=HereValue' <br>
            FullURL Example: http://domain.com/scrape/WithoutImage?&refKey=loginspy&start=1&end=100");
        }
        $totalFakeUser = FakeUser::count();
        if (empty($totalFakeUser)) {
            dd("Please Get Some Fake Users before Scrape Post Please  Help: 'example.com/insert?userCount=Value'");
        }

        $source_url = SourceUrl::where('is_scraped', 0)->whereBetween('id', [$start, $end])->orderBy('id', 'ASC')->first();

        if (!empty($source_url->url)) {
            //is_scraped Updated in database before insert
            //  $source_url->update(['is_scraped' => 1]);

            //duplicate check in database before insert

            $duplicate_check = Post::where('source_url', $source_url->url)->first();
            if (empty($duplicate_check)) {
                echo "$source_url->url";

                $response = Browsershot::url($source_url->url)->windowSize(1000, 1000)->waitUntilNetworkIdle(false)->userAgent('Mozilla/5.0 (iPhone; CPU iPhone OS 13_5_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Mobile/15E148 Safari/604.1')->evaluate("document.documentElement.outerHTML");
                // $response = Browsershot::url($source_url->url)->bodyHtml();

                //  echo $response;

                $pokemon_doc = new \DOMDocument();
                libxml_use_internal_errors(true); //disable libxml errors

                $pokemon_doc->loadHTML($response);
                libxml_clear_errors(); //remove errors for yucky html

                $pokemon_doc->preserveWhiteSpace = false;
                $pokemon_doc->saveHTML();

                $pokemon_xpath = new \DOMXPath($pokemon_doc);

                $reply_check = $pokemon_xpath->query('//a[contains(@class, "in-response-to")]');
                if (!empty($reply_check)) {
                    foreach ($reply_check as $reply_checks) {
                        $reply_checks_value[] = $reply_checks->getAttribute("href");
                    }
                    // echo "<pre>";
                    // print_r($reply_checks_value[0]);
                } else {
                    dd("have no Answer In this Post");
                }

                if (!empty($reply_checks_value[0])) {
                    $thread_Url = "https://discussions.apple.com.$reply_checks_value[0]";
                } else {
                    dd("Have Not Valid Answer In this thread");
                }
                echo "<br>$thread_Url";
                $responseFull = Browsershot::url($thread_Url)->windowSize(1000, 1000)->waitUntilNetworkIdle(false)->userAgent('Mozilla/5.0 (iPhone; CPU iPhone OS 13_5_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Mobile/15E148 Safari/604.1')->evaluate("document.documentElement.outerHTML");

                $apple_doc = new \DOMDocument();
                libxml_use_internal_errors(true); //disable libxml errors

                $apple_doc->loadHTML($responseFull);
                libxml_clear_errors(); //remove errors for yucky html

                $apple_doc->preserveWhiteSpace = false;
                $apple_doc->saveHTML();

                $apple_xpath = new \DOMXPath($apple_doc);

                //get all the data with an id
                $Answers_single   = $apple_xpath->query('/html/body/div[4]/main/div/section[1]/div[2]/article/div[2]/div/div[1]/div[1]');
                $Answers_selected = $apple_xpath->query('/html/body/div[4]/main/div/div[1]/section[*]/div[2]/div/div[1]/div[1]');
                $Answers_featured = $apple_xpath->query('/html/body/div[4]/main/div/section[*]/div[2]/article[11]/div[2]/div/div[1]/div[1]');
                $Answers          = $apple_xpath->query('/html/body/div[4]/main/div/section[2]/div[2]/article[*]/div[2]/div/div[1]/div[1]');
                $Questions        = $apple_xpath->query('/html/body/div[4]/main/div/div[1]/section[1]/div[2]/div/h1/span[3]');
                $Questions_dec    = $apple_xpath->query('/html/body/div[4]/main/div/div[1]/section/div[2]/div/div[2]/div[1]');

                $loop_count = $Answers_single->length + $Answers_featured->length + $Answers->length + $Answers_selected->length;

                if (1 <= $Questions->length) {
                    foreach ($Questions as $Question) {
                        $Question_html[]  = $Question->c14n();
                        $Question_Value[] = $Question->nodeValue;
                    }
                    echo "<pre>";
                    print_r($Question_Value);

                    if (1 <= $Questions_dec->length) {
                        foreach ($Questions_dec as $Question_dec) {
                            $Question_dec_Value[] = $Question_dec->c14n();
                        }
                        echo "<pre>";
                        print_r($Question_dec_Value);
                    } else {
                        $Question_dec_Value[] = null;
                    }

                    if (1 <= $Answers_single->length) {
                        foreach ($Answers_single as $Answer_single) {
                            $Answer_single_value[] = $Answer_single->c14n();
                        }
                        echo "<pre>";
                        print_r($Answer_single_value);
                    } else {
                        $Answer_single_value[] = null;
                    }

                    if (1 <= $Answers->length) {
                        foreach ($Answers as $Answer) {
                            $Answer_Value[] = $Answer->c14n();
                        }
                        echo "<pre>";
                        print_r($Answer_Value);
                    } else {
                        $Answer_Value[] = null;
                    }

                    if (1 <= $Answers_featured->length) {
                        foreach ($Answers_featured as $Answer_featured) {
                            $Answer_featured_Value[] = $Answer_featured->c14n();
                        }
                        print_r($Answer_featured_Value);
                    } else {
                        $Answer_featured_Value[] = null;
                    }
                    if (1 <= $Answers_selected->length) {
                        foreach ($Answers_selected as $Answer_selected) {
                            $Answer_selected_Value[] = $Answer_selected->c14n();
                        }
                        print_r($Answer_selected_Value);
                    } else {
                        $Answer_selected_Value[] = null;
                    }

                    $finalAnswers = array_filter(array_merge($Answer_single_value, $Answer_Value, $Answer_featured_Value, $Answer_selected_Value));

                } else {

                    ScrapingFailed::create([
                        'source_url' => $source_url->url,
                        'error'      => '404 Not Found',
                    ]);

                    die("404 Data Not Found");
                }

                $startdate = strtotime("2021-3-01 00:00:00");
                $enddate   = strtotime("2021-5-31 23:59:59");

                $randomDate = date("Y-m-d H:i:s", mt_rand($startdate, $enddate));

                $Question_dec_Value = (!empty($Question_dec_Value[0])) ? $Question_dec_Value[0] : null;

                $postStore = Post::create([
                    'is_content'   => '1',
                    'post_title'   => $Question_Value[0],
                    'source_url'   => $source_url->url,
                    'post_dec'     => $Question_dec_Value,
                    'post_ref'     => $refKey,
                    'fake_user_id' => mt_rand(1, $totalFakeUser),
                    'published_at' => $randomDate,
                ]);

                for ($i = 1; $i < $loop_count; $i++) {

                    PostContent::create([
                        'post_id'       => $postStore->id,
                        'fake_user_id'  => mt_rand(1, $totalFakeUser),
                        'content_title' => null,
                        'content_dec'   => $finalAnswers[$i],
                    ]);
                }

            } else {
                ScrapingFailed::create([
                    'source_url' => $source_url->url,
                    'error'      => 'Duplicate Removed From DataBase Id:' . $source_url->id,
                ]);
            }

            die("scraped success");

        } else {
            die("No Record Found Please Stop Scraping");
        }
    }

}

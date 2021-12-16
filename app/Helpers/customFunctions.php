
<?php

function getRandomNumberArray($startRange, $endRange, $numbers)
{
    $randomNumber = range($startRange, $endRange);
    shuffle($randomNumber);
    return array_slice($randomNumber, 0, $numbers);
}

function faq($number, $title)
{

    $a = array(
        "<div class='que mb-2'>
       <div class='que-tit'>I forgot my  $title password. How do I obtain it?</div>
       <div class='ans'> Ans: First Go to $title login page and then click on forgot password link.
           Enter your username or mail id to get the password reset link.</div>
   </div>",

        "<div class='que mb-2'>
        <div class='que-tit'>I forgot my Username. How do I obtain it?</div>
        <div class='ans'>Ans: First Go to $title login page and then click on forgot username link. Enter your registered mail id, you will soon get your Username.
        </div>
    </div>",

        "<div class='que mb-2'>
        <div class='que-tit'>I’m a new visitor to $title. How do I login?</div>
        <div class='ans'>As you explore $title web sites you may encounter content that is only accessible to $title Members and registered visitors. Should you encounter this type of content, a login screen displays and you need to create an account. Upon completing the registration process you will be able to login using the email and password you entered during account creation. For return visits enter your Username and Password in the login box.
        </div>
    </div>",

        "<div class='que mb-2'>
        <div class='que-tit'>I’m a member of $title. How do I login?</div>
        <div class='ans'>The first time you login, enter your Username and Password in the login box which is located throughout the $title site. If you cannot remember your Username or Password use the Forgot Username or Forgot Password links to receive a reset email to your primary email address.
        </div>
    </div>",

        "<div class='que mb-2'>
        <div class='que-tit'>Can I Submit my feedback related to $title Login? </div>
        <div class='ans'>Yes, you are always welcome to share your experience with us. It helps us to improve the user experience. Please share your experience with $title Login or any suggestion with us via email, we really appreciate it.</div>
    </div>",

        "<div class='que mb-2'>
    <div class='que-tit'>$title login page not working. What to do now ?</div>
    <div class='ans'>We have suggested some $title login page. Please try them if you still think the official login page is not working, the site might be down or you can wait for some time.
    </div>
</div>",

        "<div class='que mb-2'>
<div class='que-tit'>How can I contact the support ?</div>
<div class='ans'>To contact the $title support, please visit our contact us page. Raise a ticket or mail us on our official id.
</div>
</div>",
    );
    $random_keys = array_rand($a, $number);
    foreach (range(1, $number) as $index => $value) {
        echo $a[$random_keys[$index]] . '<br>';
    }
}
<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\CmsSetting;

class CmsSettingsView
{
    public function compose(View $view)
    {
        $this->composeCmsSettings($view);
    }

    public function composeCmsSettings(View $View)
    {
        $WebsiteName         = CmsSetting::where('item', 'WebsiteName')->first();
        $HeaderCode          = CmsSetting::where('item', 'HeaderCode')->first();
        $LogoPath            = CmsSetting::where('item', 'LogoPath')->first();
        $HomeSlider          = CmsSetting::where('item', 'HomeSlider')->first();
        $FooterContent       = CmsSetting::where('item', 'FooterContent')->first();
        $StepH1              = CmsSetting::where('item', 'StepH1')->first();
        $StepC1              = CmsSetting::where('item', 'StepC1')->first();
        $StepH2              = CmsSetting::where('item', 'StepH2')->first();
        $StepC2              = CmsSetting::where('item', 'StepC2')->first();
        $StepH3              = CmsSetting::where('item', 'StepH3')->first();
        $StepC3              = CmsSetting::where('item', 'StepC3')->first();
        $StepH4              = CmsSetting::where('item', 'StepH4')->first();
        $StepC4              = CmsSetting::where('item', 'StepC4')->first();
        $HomePageTitle       = CmsSetting::where('item', 'HomePageTitle')->first();
        $PrePostPageTitle    = CmsSetting::where('item', 'PrePostPageTitle')->first();
        $AfterPostPageTitle  = CmsSetting::where('item', 'AfterPostPageTitle')->first();
        $ConstantPostContent = CmsSetting::where('item', 'ConstantPostContent')->first();
        $homeSliderTitle = CmsSetting::where('item', 'homeSliderTitle')->first();
        $homeSearchTitle = CmsSetting::where('item', 'homeSearchTitle')->first();
        $homeStepTitle = CmsSetting::where('item', 'homeStepTitle')->first();
        $ContactUs = CmsSetting::where('item', 'ContactUs')->first();
        $footerLinks1 = CmsSetting::where('item', 'footerLinks1')->first();
        $footerLinks2 = CmsSetting::where('item', 'footerLinks2')->first();
        $reportIssue = CmsSetting::where('item', 'reportIssue')->first();

        $View->with([
            'WebsiteName'         => $WebsiteName,
            'HeaderCode'          => $HeaderCode,
            'LogoPath'            => $LogoPath,
            'HomeSlider'          => $HomeSlider,
            'FooterContent'       => $FooterContent,
            'StepH1'              => $StepH1,
            'StepH2'              => $StepH2,
            'StepH3'              => $StepH3,
            'StepH4'              => $StepH4,
            'StepC1'              => $StepC1,
            'StepC2'              => $StepC2,
            'StepC3'              => $StepC3,
            'StepC4'              => $StepC4,
            'HomePageTitle'       => $HomePageTitle,
            'AfterPostPageTitle'  => $AfterPostPageTitle,
            'PrePostPageTitle'    => $PrePostPageTitle,
            'ConstantPostContent' => $ConstantPostContent,
            'homeSliderTitle' =>$homeSliderTitle,
            'homeSearchTitle' =>$homeSearchTitle,
            'homeStepTitle' => $homeStepTitle,
            'ContactUs' => $ContactUs,
            'footerLinks1' => $footerLinks1,
            'footerLinks2' => $footerLinks2,
            'reportIssue' => $reportIssue,
            
        ]);
    }
}

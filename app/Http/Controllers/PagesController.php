<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;
use App\Http\Controllers\ImagesController;

class PagesController extends Controller
{
    public function index() {
        $HOME_BG = (new ImagesController('/images/Home_BG.png'))->intervent();
        $HISTORY_BG = (new ImagesController('/images/History_BG.png'))->intervent();
        $ABOUTUS_BG = (new ImagesController('/images/about_us_BG.png'))->intervent();
        $SEHAT_GALLERY_1 = (new ImagesController('images/galleries/Sehat_Cerdas_1.jpg'))->intervent();
        $SEHAT_GALLERY_2 = (new ImagesController('/images/galleries/Sehat_Cerdas_2.jpg'))->intervent();
        $SEHAT_GALLERY_3 = (new ImagesController('/images/galleries/Sehat_Cerdas_3.jpg'))->intervent();
        $SEHAT_GALLERY_4 = (new ImagesController('/images/galleries/Sehat_Cerdas_4.jpg'))->intervent();
        $SEHAT_GALLERY_5 = (new ImagesController('/images/galleries/Sehat_Cerdas_5.jpg'))->intervent();
        $SEHAT_GALLERY_6 = (new ImagesController('/images/galleries/Sehat_Cerdas_6.jpg'))->intervent();
        $GM_GALLERY_1 = (new ImagesController('/images/galleries/General_Meeting_1.jpg'))->intervent();
        $GM_GALLERY_2 = (new ImagesController('/images/galleries/General_Meeting_2.jpg'))->intervent();
        $GM_GALLERY_3 = (new ImagesController('/images/galleries/General_Meeting_3.jpg'))->intervent();
        $GM_GALLERY_4 = (new ImagesController('/images/galleries/General_Meeting_4.jpg'))->intervent();
        $GM_GALLERY_5 = (new ImagesController('/images/galleries/General_Meeting_5.jpg'))->intervent();
        $GM_GALLERY_6 = (new ImagesController('/images/galleries/General_Meeting_6.jpg'))->intervent();
        $WW_GALLERY_1 = (new ImagesController('/images/galleries/Wonder_Woman_1.png'))->intervent();
        $WW_GALLERY_2 = (new ImagesController('/images/galleries/Wonder_Woman_2.png'))->intervent();
        $WW_GALLERY_3 = (new ImagesController('/images/galleries/Wonder_Woman_3.png'))->intervent();
        $WW_GALLERY_4 = (new ImagesController('/images/galleries/Wonder_Woman_4.png'))->intervent();
        $WW_GALLERY_5 = (new ImagesController('/images/galleries/Wonder_Woman_5.png'))->intervent();
        $WW_GALLERY_6 = (new ImagesController('/images/galleries/Wonder_Woman_6.png'))->intervent();

        $mailto = 'jasonlimantoro99@gmail.com';
        return view('pages.index', compact(
            [
                'mailto', 
                'HOME_BG',
                'HISTORY_BG',
                'ABOUTUS_BG',
                'SEHAT_GALLERY_1',
                'SEHAT_GALLERY_2',
                'SEHAT_GALLERY_3',
                'SEHAT_GALLERY_4',
                'SEHAT_GALLERY_5',
                'SEHAT_GALLERY_6',
                'GM_GALLERY_1',
                'GM_GALLERY_2',
                'GM_GALLERY_3',
                'GM_GALLERY_4',
                'GM_GALLERY_5',
                'GM_GALLERY_6',
                'WW_GALLERY_1',
                'WW_GALLERY_2',
                'WW_GALLERY_3',
                'WW_GALLERY_4',
                'WW_GALLERY_5',
                'WW_GALLERY_6',
            ]
        ));
    }

}

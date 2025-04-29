<?php

namespace App\Providers;

use App\Models\Configuration;
use App\Models\Election;
use App\Models\Key;
use App\Models\Event;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\PublicityBanner;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        $currentYear = now()->year;


        $response['checkevent'] = Event::get();

        $response['gallerieImage'] = Gallery::orderBy('id', 'desc')->paginate(6);

        $response['gallerieVideo'] = Video::orderBy('id', 'desc')->paginate(6);

        $response['lastedNews'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(4)->get();

        $response['lastedEvents'] = Event::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(4)->get();

        $response['banner'] = PublicityBanner::orderBy('id', 'desc')->limit(6)->get();

        $actualYear = date("Y");


        foreach ($response['checkevent'] as $event) {

            if (date('Y', strtotime($event['dateEvent'])) ==  $actualYear) {



                if (date('d-m', strtotime($event['dateEvent'])) == '01-01') {

                    $response['date_01_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '02-01') {
                    $response['date_02_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '03-01') {
                    $response['date_03_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '04-01') {
                    $response['date_04_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '05-01') {
                    $response['date_05_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '06-01') {
                    $response['date_06_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '07-01') {
                    $response['date_07_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '08-01') {
                    $response['date_08_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '09-01') {
                    $response['date_09_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '10-01') {
                    $response['date_10_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '11-01') {
                    $response['date_11_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent']))  == '12-01') {
                    $response['date_12_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '13-01') {
                    $response['date_13_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '14-01') {
                    $response['date_14_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '15-01') {
                    $response['date_15_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '16-01') {
                    $response['date_16_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '17-01') {
                    $response['date_17_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '18-01') {
                    $response['date_18_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '19-01') {
                    $response['date_19_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '20-01') {
                    $response['date_20_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '21-01') {
                    $response['date_21_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '22-01') {
                    $response['date_22_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '24-01') {
                    $response['date_23_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '25-01') {
                    $response['date_25_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '26-01') {
                    $response['date_26_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '27-01') {
                    $response['date_27_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '28-01') {
                    $response['date_28_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '29-01') {
                    $response['date_29_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '30-01') {
                    $response['date_30_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '31-01') {
                    $response['date_31_01'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '01-02') {
                    $response['date_01_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '02-02') {
                    $response['date_02_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '03-02') {
                    $response['date_03_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '04-02') {
                    $response['date_04_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '05-02') {
                    $response['date_05_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '06-02') {
                    $response['date_06_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '07-02') {
                    $response['date_07_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '08-02') {
                    $response['date_08_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '09-02') {
                    $response['date_09_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '10-02') {
                    $response['date_10_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '11-02') {
                    $response['date_11_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '12-02') {
                    $response['date_12_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '13-02') {
                    $response['date_13_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '14-02') {
                    $response['date_14_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '15-02') {
                    $response['date_15_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '16-02') {
                    $response['date_16_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '17-02') {
                    $response['date_17_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '18-02') {
                    $response['date_18_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '19-02') {
                    $response['date_19_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '20-02') {
                    $response['date_20_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '21-02') {
                    $response['date_21_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '22-02') {
                    $response['date_22_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '23-02') {
                    $response['date_23_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '24-02') {
                    $response['date_24_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '25-02') {
                    $response['date_25_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '26-02') {
                    $response['date_26_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '27-02') {
                    $response['date_27_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '28-02') {
                    $response['date_28_02'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '01-03') {
                    $response['date_01_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '02-03') {
                    $response['date_02_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '03-03') {
                    $response['date_03_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '04-03') {
                    $response['date_04_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '05-03') {
                    $response['date_05_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '06-03') {
                    $response['date_06_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '07-03') {
                    $response['date_07_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '08-03') {
                    $response['date_08_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '09-03') {
                    $response['date_09_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '10-03') {
                    $response['date_10_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '11-03') {
                    $response['date_11_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '12-03') {
                    $response['date_12_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '13-03') {
                    $response['date_13_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '14-03') {
                    $response['date_14_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '15-03') {
                    $response['date_15_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '16-03') {
                    $response['date_16_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '17-03') {
                    $response['date_17_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '18-03') {
                    $response['date_18_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '19-03') {
                    $response['date_19_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '20-03') {
                    $response['date_20_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '21-03') {
                    $response['date_21_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '22-03') {
                    $response['date_22_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '23-03') {
                    $response['date_23_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '24-03') {
                    $response['date_24_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '25-03') {
                    $response['date_25_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '26-03') {
                    $response['date_26_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '27-03') {
                    $response['date_27_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '28-03') {
                    $response['date_28_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '29-03') {
                    $response['date_29_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '30-03') {
                    $response['date_30_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '31-03') {
                    $response['date_31_03'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '01-04') {
                    $response['date_01_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '02-04') {
                    $response['date_02_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '03-04') {
                    $response['date_03_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '04-04') {
                    $response['date_04_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '05-04') {
                    $response['date_05_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '06-04') {
                    $response['date_06_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '07-04') {
                    $response['date_07_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '08-04') {
                    $response['date_08_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '09-04') {
                    $response['date_09_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '10-04') {
                    $response['date_10_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '11-04') {
                    $response['date_11_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '12-04') {
                    $response['date_12_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '13-04') {
                    $response['date_13_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '14-04') {
                    $response['date_14_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '15-04') {
                    $response['date_15_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '16-04') {
                    $response['date_16_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '17-04') {
                    $response['date_17_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '18-04') {
                    $response['date_18_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '19-04') {
                    $response['date_19_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '20-04') {
                    $response['date_20_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '21-04') {
                    $response['date_21_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '22-04') {
                    $response['date_22_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '23-04') {
                    $response['date_23_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '24-04') {
                    $response['date_24_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '25-04') {
                    $response['date_25_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '26-04') {
                    $response['date_26_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '27-04') {
                    $response['date_27_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '28-04') {
                    $response['date_28_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '29-04') {
                    $response['date_29_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '30-04') {
                    $response['date_30_04'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '01-05') {
                    $response['date_01_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '02-05') {
                    $response['date_02_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '03-05') {
                    $response['date_03_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '04-05') {
                    $response['date_04_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '05-05') {
                    $response['date_05_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '06-05') {
                    $response['date_06_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '07-05') {
                    $response['date_07_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '08-05') {
                    $response['date_08_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '09-05') {
                    $response['date_09_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '10-05') {
                    $response['date_10_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '11-05') {
                    $response['date_11_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '12-05') {
                    $response['date_12_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '13-05') {
                    $response['date_13_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '14-05') {
                    $response['date_14_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '15-05') {
                    $response['date_15_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '16-05') {
                    $response['date_16_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '17-05') {
                    $response['date_17_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '18-05') {
                    $response['date_18_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '19-05') {
                    $response['date_19_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '20-05') {
                    $response['date_20_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '21-05') {
                    $response['date_21_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '22-05') {
                    $response['date_22_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '23-05') {
                    $response['date_23_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '24-05') {
                    $response['date_24_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '25-05') {
                    $response['date_25_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '26-05') {
                    $response['date_26_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '27-05') {
                    $response['date_27_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '28-05') {
                    $response['date_28_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '29-05') {
                    $response['date_29_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '30-05') {
                    $response['date_30_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '31-05') {
                    $response['date_31_05'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '01-06') {
                    $response['date_01_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '02-06') {
                    $response['date_02_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '03-06') {
                    $response['date_03_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '04-06') {
                    $response['date_04_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '05-06') {
                    $response['date_05_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '06-06') {
                    $response['date_06_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '07-06') {
                    $response['date_07_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '08-06') {
                    $response['date_08_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '09-06') {
                    $response['date_09_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '10-06') {
                    $response['date_10_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '11-06') {
                    $response['date_11_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '12-06') {
                    $response['date_12_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '13-06') {
                    $response['date_13_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '14-06') {
                    $response['date_14_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '15-06') {
                    $response['date_15_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '16-06') {
                    $response['date_16_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '17-06') {
                    $response['date_17_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '18-06') {
                    $response['date_18_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '19-06') {
                    $response['date_19_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '20-06') {
                    $response['date_20_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '21-06') {
                    $response['date_21_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '22-06') {
                    $response['date_22_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '23-06') {
                    $response['date_23_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '24-06') {
                    $response['date_24_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '25-06') {
                    $response['date_25_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '26-06') {
                    $response['date_26_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '27-06') {
                    $response['date_27_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '28-06') {
                    $response['date_28_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '29-06') {
                    $response['date_29_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '30-06') {
                    $response['date_30_06'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '01-07') {
                    $response['date_01_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '02-07') {
                    $response['date_02_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '03-07') {
                    $response['date_03_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '04-07') {
                    $response['date_04_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '05-07') {
                    $response['date_05_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '06-07') {
                    $response['date_06_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '07-07') {
                    $response['date_07_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '08-07') {
                    $response['date_08_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '09-07') {
                    $response['date_09_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '10-07') {
                    $response['date_10_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '11-07') {
                    $response['date_11_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '12-07') {
                    $response['date_12_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '13-07') {
                    $response['date_13_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '14-07') {
                    $response['date_14_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '15-07') {
                    $response['date_15_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '16-07') {
                    $response['date_16_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '17-07') {
                    $response['date_17_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '18-07') {
                    $response['date_18_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '19-07') {
                    $response['date_19_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '20-07') {
                    $response['date_20_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '21-07') {
                    $response['date_21_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '22-07') {
                    $response['date_22_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '23-07') {
                    $response['date_23_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '24-07') {
                    $response['date_24_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '25-07') {
                    $response['date_25_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '26-07') {
                    $response['date_26_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '27-07') {
                    $response['date_27_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '28-07') {
                    $response['date_28_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '29-07') {
                    $response['date_29_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '30-07') {
                    $response['date_30_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '31-07') {
                    $response['date_31_07'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '01-08') {
                    $response['date_01_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '02-08') {
                    $response['date_02_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '03-08') {
                    $response['date_03_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '04-08') {
                    $response['date_04_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '05-08') {
                    $response['date_05_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '06-08') {
                    $response['date_06_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '07-08') {
                    $response['date_07_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '08-08') {
                    $response['date_08_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '09-08') {
                    $response['date_09_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '10-08') {
                    $response['date_10_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '11-08') {
                    $response['date_11_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '12-08') {
                    $response['date_12_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '13-08') {
                    $response['date_13_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '14-08') {
                    $response['date_14_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '15-08') {
                    $response['date_15_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '16-08') {
                    $response['date_16_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '17-08') {
                    $response['date_17_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '18-08') {
                    $response['date_18_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '19-08') {
                    $response['date_19_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '20-08') {
                    $response['date_20_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '21-08') {
                    $response['date_21_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '22-08') {
                    $response['date_22_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '23-08') {
                    $response['date_23_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '24-08') {
                    $response['date_24_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '25-08') {
                    $response['date_25_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '26-08') {
                    $response['date_26_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '27-08') {
                    $response['date_27_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '28-08') {
                    $response['date_28_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '29-08') {
                    $response['date_29_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '30-08') {
                    $response['date_30_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '31-08') {
                    $response['date_05_08'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '01-09') {
                    $response['date_01_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '02-09') {
                    $response['date_02_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '03-09') {
                    $response['date_03_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '04-09') {
                    $response['date_04_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '05-09') {
                    $response['date_05_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '06-09') {
                    $response['date_06_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '07-09') {
                    $response['date_07_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '08-09') {
                    $response['date_08_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '09-09') {
                    $response['date_09_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '10-09') {
                    $response['date_10_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '11-09') {
                    $response['date_11_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '12-09') {
                    $response['date_12_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '13-09') {
                    $response['date_13_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '14-09') {
                    $response['date_14_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '15-09') {
                    $response['date_15_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '16-09') {
                    $response['date_16_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '17-09') {
                    $response['date_17_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '18-09') {
                    $response['date_18_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '19-09') {
                    $response['date_19_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '20-09') {
                    $response['date_20_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '21-09') {
                    $response['date_21_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '22-09') {
                    $response['date_22_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '23-09') {
                    $response['date_23_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '24-09') {
                    $response['date_24_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '25-09') {
                    $response['date_25_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '26-09') {
                    $response['date_26_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '28-09') {
                    $response['date_28_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '29-09') {
                    $response['date_29_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '30-09') {
                    $response['date_30_09'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '01-10') {
                    $response['date_01_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '02-10') {
                    $response['date_02_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '03-10') {
                    $response['date_03_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '04-10') {
                    $response['date_04_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '05-10') {
                    $response['date_05_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '06-10') {
                    $response['date_06_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '07-10') {
                    $response['date_07_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '08-10') {
                    $response['date_08_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '09-10') {
                    $response['date_09_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '10-10') {
                    $response['date_10_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '11-10') {
                    $response['date_11_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '12-10') {
                    $response['date_12_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '13-10') {
                    $response['date_13_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '14-10') {
                    $response['date_14_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '15-10') {
                    $response['date_15_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '16-10') {
                    $response['date_16_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '17-10') {
                    $response['date_17_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '18-10') {
                    $response['date_18_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '19-10') {
                    $response['date_19_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '20-10') {
                    $response['date_20_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '21-10') {
                    $response['date_21_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '22-10') {
                    $response['date_22_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '23-10') {
                    $response['date_23_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '24-10') {
                    $response['date_24_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '25-10') {
                    $response['date_25_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '26-10') {
                    $response['date_26_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '27-10') {
                    $response['date_27_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '28-10') {
                    $response['date_28_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '29-10') {
                    $response['date_29_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '30-10') {
                    $response['date_30_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '31-10') {
                    $response['date_31_10'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '01-11') {
                    $response['date_01_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '02-11') {
                    $response['date_02_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '03-11') {
                    $response['date_03_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '04-11') {
                    $response['date_04_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '05-11') {
                    $response['date_05_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '06-11') {
                    $response['date_06_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '07-11') {
                    $response['date_07_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '08-11') {
                    $response['date_08_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '09-11') {
                    $response['date_09_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '10-11') {
                    $response['date_10_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '11-11') {
                    $response['date_11_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '12-11') {
                    $response['date_12_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '13-11') {
                    $response['date_13_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '14-11') {
                    $response['date_14_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '15-11') {
                    $response['date_15_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '16-11') {
                    $response['date_16_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '17-11') {
                    $response['date_17_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '18-11') {
                    $response['date_18_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '19-11') {
                    $response['date_19_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '20-11') {
                    $response['date_20_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '21-11') {
                    $response['date_21_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '22-11') {
                    $response['date_22_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '23-11') {
                    $response['date_23_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '24-11') {
                    $response['date_24_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '25-11') {
                    $response['date_25_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '26-11') {
                    $response['date_26_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '27-11') {
                    $response['date_27_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '28-11') {
                    $response['date_28_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '29-11') {
                    $response['date_29_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '30-11') {
                    $response['date_30_11'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '01-12') {
                    $response['date_01_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '02-12') {
                    $response['date_02_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '03-12') {
                    $response['date_03_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '04-12') {
                    $response['date_04_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '05-12') {
                    $response['date_05_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '06-12') {
                    $response['date_06_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '07-12') {
                    $response['date_07_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '08-12') {
                    $response['date_08_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '09-12') {
                    $response['date_09_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '10-12') {
                    $response['date_10_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '11-12') {
                    $response['date_11_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '12-12') {
                    $response['date_12_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '13-12') {
                    $response['date_13_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '14-12') {
                    $response['date_14_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '15-12') {
                    $response['date_15_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '16-12') {
                    $response['date_16_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '17-12') {
                    $response['date_17_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '18-12') {
                    $response['date_18_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '19-12') {
                    $response['date_19_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '20-12') {
                    $response['date_20_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '21-12') {
                    $response['date_21_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '22-12') {
                    $response['date_22_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '23-12') {
                    $response['date_23_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '24-12') {
                    $response['date_24_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '25-12') {
                    $response['date_25_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '26-12') {
                    $response['date_26_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '27-12') {
                    $response['date_27_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '28-12') {
                    $response['date_28_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '29-12') {
                    $response['date_29_12'] = $event['title'];
                } else if (date('d-m', strtotime($event['dateEvent'])) == '30-12') {
                    $response['date_30_12'] = $event['title'];
                } else {
                    $response['date_31_12'] = $event['title'];
                }
            }
        }


        Paginator::useBootstrap();




        $response['configuration'] = Configuration::first();


        view()->share($response);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function create(Request $request)
    {
        $name = $request->get('name');
        $lastname = $request->get('lastname');

        $fullname = $name . " " . $lastname;
        $sensor_name = str_replace("", "*", $fullname);
        echo $sensor_name;

        return view("myprofile/create");
    }

    public function edit($id)
    {
        $profile = (object)[
            "id" => $id,
            "name" => "Meen",
            "lastname" =>  "Ruuuu",
            "email" => "Ruuuu@vru.ac.th",
        ];
        $others = "hello anonymous";
        return view("myprofile/edit", compact('profile', 'others'));
    }

    public function show($id)
    {
        $profile = (object)[
            "id" => $id,
            "name" => "James",
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/show", compact('profile', 'others'));
    }

    public function coronavirus()
    {
        $reports = [
            (object) ["country" => "Thailand", "date" => "2020-04-19", "total" => "2765", "active" => "790", "death" => "47", "recovered" => "1928"],
            (object) ["country" => "Thailand", "date" => "2020-04-18", "total" => "2733", "active" => "899", "death" => "47", "recovered" => "1787"],
            (object) ["country" => "Thailand", "date" => "2020-04-17", "total" => "2700", "active" => "964", "death" => "47", "recovered" => "1689"],
            (object) ["country" => "Thailand", "date" => "2020-04-16", "total" => "2672", "active" => "1033", "death" => "46", "recovered" => "1593"],
            (object) ["country" => "Thailand", "date" => "2020-04-15", "total" => "2643", "active" => "1103", "death" => "43", "recovered" => "1497"],
        ];
        return view("myprofile/coronavirus", compact("reports"));
    }

    public function gallery()
    {
        $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
        $bird = "https://cdn.vox-cdn.com/thumbor/n1ad23hZrumsQ8gdXQ3yAyPYn8U=/0x0:1400x787/1200x800/filters:focal(405x89:629x313)/cdn.vox-cdn.com/uploads/chorus_image/image/63686080/lag0835_v074.1004_wide_6038893c740ea664a676ebc5d8160b22c02ad616.0.jpg";
        $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
        $god = "https://www.blackoutx.com/wp-content/uploads/2021/04/Thor.jpg";
        $spider = "https://icdn5.digitaltrends.com/image/spiderman-far-from-home-poster-2-720x720.jpg";

        return view("test/index", compact("ant", "bird", "cat", "god", "spider"));
    }
    public function ant()
    {
        $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
        return view("test/ant", compact("ant"));
    }
    public function bird()
    {
        $bird = "https://cdn.vox-cdn.com/thumbor/n1ad23hZrumsQ8gdXQ3yAyPYn8U=/0x0:1400x787/1200x800/filters:focal(405x89:629x313)/cdn.vox-cdn.com/uploads/chorus_image/image/63686080/lag0835_v074.1004_wide_6038893c740ea664a676ebc5d8160b22c02ad616.0.jpg";
        return view("test/bird", compact("bird"));
    }
}

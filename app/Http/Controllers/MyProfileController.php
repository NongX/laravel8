<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    //

    public function create(Request $request)
    {
        //$name = $request->get('name');
        //$lastname = $request->get('lastname');
        $name = request('name');
        $lastname = request('lastname');


        $fullname = $name . " " . $lastname;
        $sensor_name = str_replace("a", "*", $fullname);
        echo $sensor_name;

        return view("myprofile/create");
    }

    public function edit($id)
    {
        $profile = (object)[
            "id" => $id,
            "name" => "James",
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        $others = "hello world";
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
            (object) ["country" => "China", "date" => "2020-04-17", "total" => "2700", "active" => "964", "death" => "47", "recovered" => "1689"],
            (object) ["country" => "Thailand", "date" => "2020-04-16", "total" => "2672", "active" => "1033", "death" => "46", "recovered" => "1593"],
            (object) ["country" => "Thailand", "date" => "2020-04-15", "total" => "2643", "active" => "1103", "death" => "43", "recovered" => "1497"],
        ];
        return view("myprofile/coronavirus", compact("reports"));
    }

    public function gallery()
    {

        $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
        $bird = "https://i.pinimg.com/736x/48/46/48/4846486148696ff63d50c7832641a6fa.jpg";
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

        $bird = "https://i.pinimg.com/736x/48/46/48/4846486148696ff63d50c7832641a6fa.jpg";

        return view("test/bird", compact("bird"));
    }
}
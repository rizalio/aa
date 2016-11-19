<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function email()
    {
      $faker = \Faker\Factory::create();

      for($i = 0; $i <= 500; $i++)
      {
        $email[] = $faker->email;
      }
      return view('email')->with('emails', $email);
    }

    public function usaaddress()
    {
      $faker = \Faker\Factory::create();
      for($i = 0; $i <= 500; $i++)
      {
        $address[] = $faker->address;
      }
      return view('address')->with('addresss', $address);
    }

    public function creditcard()
    {
      $faker = \Faker\Factory::create();
      for($i = 0; $i <= 20; $i++)
      {
        $cc[] = $faker->creditCardDetails;
      }
      return view('creditcard')->with('ccs', $cc);
    }

    public function mailpass()
    {
      $faker = \Faker\Factory::create();
      for($i = 0; $i <= 500; $i++)
      {
        $mailpass[] = array('email' => $faker->email, 'password' => $faker->password);
      }
      return view('mailpass')->with('mailpass', $mailpass);
    }
}

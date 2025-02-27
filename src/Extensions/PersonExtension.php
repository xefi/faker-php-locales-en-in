<?php

namespace Xefi\Faker\EnIn\Extensions;

use Xefi\Faker\Extensions\PersonExtension as BasePersonExtension;

class PersonExtension extends BasePersonExtension
{
    public function getLocale(): string|null
    {
        return 'en_IN';
    }

    protected $firstNameMale = [
        'Aarav', 'Vivaan', 'Aditya', 'Arjun', 'Sai', 'Krishna', 'Ishaan', 'Kabir', 'Rudra', 'Atharv',
        'Ayaan', 'Dhruv', 'Kartik', 'Om', 'Reyansh', 'Veer', 'Rohan', 'Aryan', 'Yuvan', 'Shaurya',
        'Harsh', 'Raghav', 'Samarth', 'Tanish', 'Pranav', 'Shivansh', 'Devansh', 'Moksh', 'Lakshay', 'Nirvaan',
        'Agastya', 'Samar', 'Vihaan', 'Eshan', 'Yash', 'Manan', 'Hrithik', 'Darsh', 'Harshit', 'Tejas',
    ];

    protected $firstNameFemale = [
        'Aadhya', 'Aaradhya', 'Ananya', 'Avni', 'Diya', 'Ira', 'Ishita', 'Jhanvi', 'Kiara', 'Meera',
        'Mishka', 'Myra', 'Navya', 'Pari', 'Prisha', 'Riya', 'Saanvi', 'Sanvi', 'Shanaya', 'Siya',
        'Suhana', 'Tara', 'Trisha', 'Vanya', 'Zara', 'Aanya', 'Bhavya', 'Charvi', 'Eesha', 'Hansika',
        'Kashvi', 'Mahika', 'Nisha', 'Pihu', 'Radhika', 'Sahana', 'Tanisha', 'Vaanya', 'Yuvika', 'Zaina',
    ];

    protected $lastName = [
        'Sharma', 'Verma', 'Gupta', 'Mehta', 'Kapoor', 'Singh', 'Rajput', 'Thakur', 'Chopra', 'Bajpai',
        'Mishra', 'Srivastava', 'Tripathi', 'Pandey', 'Tiwari', 'Yadav', 'Rao', 'Pillai', 'Iyer', 'Nair',
        'Menon', 'Das', 'Ghosh', 'Mukherjee', 'Chatterjee', 'Banerjee', 'Basu', 'Patel', 'Joshi', 'Desai',
        'Kadam', 'Bhandari', 'Jadhav', 'Chavan', 'Reddy', 'Naidu', 'Shetty', 'Gowda', 'Kumar', 'Malhotra',
    ];

    protected $titleMale = ['Mr.', 'Dr.', 'Prof.', 'Sri'];

    protected $titleFemale = ['Ms.', 'Mrs.', 'Miss', 'Dr.', 'Prof.', 'Smt.'];
}
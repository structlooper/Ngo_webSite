<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'IndexController@index')->name('index');
Route::get('/donate','IndexController@donate');
Route::get('/contactUs','IndexController@contact')->name('contact_us');

// about_us......
Route::get('/aboutus/who_we_are','AboutController@about_us');
Route::get('/aboutus','AboutController@about_us');
Route::get('/aboutus/team','AboutController@team');


//  Events.......
Route::get('/events','EventsController@index');


// our works.......

Route::get('/our_works/education','OurWorkController@education');
Route::get('/our_works/health','OurWorkController@health');
Route::get('/our_works/WomenEnpowerment','OurWorkController@women');

Auth::routes();


Route::post('/donating', 'DonateController@store')->name('donating');
Route::post('/paytm-callback','DonateController@paytmCallback');


Route::group(['middleware' => ['auth','Admin']], function () {
    

    Route::any('/dashboard', 'DashboardController@index')->name("dashboard");
    Route::get('/profiles','DashboardController@profiles');
    

    Route::get('/aboutusEdit','AboutEditWhoWeAreController@index');
    Route::post('/aboutSave','AboutEditWhoWeAreController@store')->name('aboutSave');
    

    Route::get('/aboutusEditTeam','AboutTeamEditController@index_1');
    Route::post('/slideData','AboutTeamEditController@store_slide_data')->name('SaveData');
    Route::post('/departmentMember','AboutTeamEditController@add_member_department')->name('SaveDeaprtmentMember');


    Route::get('/ourWorksEducationEdit','OurWorkEditController@Education');
    Route::post('/educationSlideSave','OurWorkEditController@educationSlideSave')->name('educationSlideSave');
    Route::post('/educationSideDataSave','OurWorkEditController@educationSideDataSave')->name('educationSideDataSave');
    Route::post('/educationSpecificWorkSave','OurWorkEditController@educationSpecificWorkSave')->name('educationSpecificWorkSave');
    
    Route::get('/ourWorksHealthEdit','OurWorkEditController@Health');
    Route::post('/healthSlideSave','OurWorkEditController@healthSlideSave')->name('healthSlideSave');
    Route::post('/healthSideDataSave','OurWorkEditController@healthSideDataSave')->name('healthSideDataSave');
    Route::post('/healthSpecificWorkSave','OurWorkEditController@healthSpecificWorkSave')->name('healthSpecificWorkSave');
    
    
    Route::get('/ourWorksWomenEnpowermentEdit','OurWorkEditController@womenEnpowerment');
    Route::post('/womenSlideSave','OurWorkEditController@womenSlideSave')->name('womenSlideSave');
    Route::post('/womenSideDataSave','OurWorkEditController@womenSideDataSave')->name('womenSideDataSave');
    Route::post('/womenSpecificWorkSave','OurWorkEditController@womenSpecificWorkSave')->name('womenSpecificWorkSave');
    
    Route::get('/eventsEdit' , 'EventsEditController@events');
    Route::post('/eventSlideSave' , 'EventsEditController@eventSlideDataSave')->name('eventSlideDataSave');
    Route::post('/eventUpcomingSave' , 'EventsEditController@eventUpcomingDataSave')->name('eventUpcomingDataSave');
    Route::post('/eventHistorySave' , 'EventsEditController@eventHistoryDataSave')->name('eventHistoryDataSave');
    
    Route::get('/donateEdit','DonateEditController@donateEdit');
    Route::post('/donateDataSave' , 'DonateEditController@donateDataSave')->name('donatePageDataSave');
    

    Route::get('/homepageEdit' ,'HomePageEditController@view');
    Route::post('/homeSlideSave','HomePageEditController@homeSlideSave')->name('homeSlideSave');
    Route::post('/homeAboutNgoDataSave','HomePageEditController@homeAboutNgoDataSave')->name('homeAboutNgoDataSave');
    Route::post('/homeEducationSlideSave','HomePageEditController@homeEducationSlideSave')->name('homeEducationSlideSave');
    Route::post('/homeHealthSlideSave','HomePageEditController@homeHealthSlideSave')->name('homeHealthSlideSave');
    Route::post('/homeCretingImpactSave','HomePageEditController@homeCretingImpactSave')->name('homeCretingImpactSave');
    
    
    Route::get('/contactPageEdit', 'ContactPageEditController@contact');
    Route::post('/contactDetailsSave','ContactPageEditController@contactDetailsSave')->name('contactDetailsSave');

});
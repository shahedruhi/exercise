<?php

class DemoController extends \BaseController 
{

public $restful = true;
public function get_index();
	{
		$title = 'laravel page';
		$View = View::make('demo1.index', array(
			'name'=>'laravel user',
			'age'=>'28',
			'location'=>'bangalore'))
			->with('title',$title);
			return $View;
	}		
@return Response
*/
public function index()
{
//
return 'Hello World!';
}
 
/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create()
{
//
}
 
/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store()
{
//
}
 
/**
* Display the specified resource.
*
* @param int $id
* @return Response
*/
public function show($id)
{
//
}
 
/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return Response
*/
public function edit($id)
{
//
}
 
/**
* Update the specified resource in storage.
*
* @param int $id
* @return Response
*/
public function update($id)
{
//
}
 
/**
* Remove the specified resource from storage.
*
* @param int $id
* @return Response
*/
public function destroy($id)
{
//
}
 
}


?>
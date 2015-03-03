<?php

class RoomController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /room
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		var_dump('get inside RoomController');
		return View::make('room-detail');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /room/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /room
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /room/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$rooms = Reservation::getAllRoomDetail($id);
		$room = new RoomTypes();
		foreach ($rooms as $result) {
			$room = $result;
		}
		$images = Reservation::getRoomImages($id);
		$features = Reservation::getRoomFeatures($id);

		$this->layout = View::make('all-room-detail')->with('room', $room)->with('features', $features)->with('images', $images)->render();
	}

	public function showAllRoom()
	{
		$rooms = Reservation::getAllRoom();
		$features = Reservation::getAllRoomFeatures();
		       
        $this->layout = View::make('all-room-list')->with('rooms', $rooms)->with('features', $features)->render();
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /room/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /room/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /room/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
<?php

class Reservation extends Illuminate\Database\Eloquent\Model
{
	/**
     * Model 'RateAvailability' table
     * @var string
     */
	protected $table = 'roomavailability';
        
    public $timestamps = false;
    
    public static function getQueryReservation($checkInDate, $checkOutDate, $totalQty, $roomQty)
    {
        return 
        DB::select('
            SELECT 
                A.roomavailability_id,
                A.roomtype_id,
                T.roomtype_name,
                t.roomtype_description,
                T.roomtype_maxoccupancy,
                p.occupancy_id,
                O.occupancy_description,
                P.roomprice_rate,
                t.roomimage_description
            FROM roomavailability A
            LEFT JOIN (
                select t.*, i.roomimage_description from roomtypes t
                left join roomimages i
                on t.roomtype_id = i.roomtype_id
                and i.roomimage_primary = true
            ) T
                ON A.roomtype_id = T.roomtype_id
            LEFT JOIN roomprices P
                ON A.roomavailability_id = P.roomprice_datetime
                AND A.roomavailability_date = P.ROOMPRICE_DATE
                AND A.roomtype_id = P.roomtype_id
            LEFT JOIN occupancies O
                ON P.occupancy_id = O.occupancy_id
            WHERE 1=1
                AND A.roomavailability_date >= ? 
                AND A.roomavailability_date < ?
                AND A.roomavailability_number >= ?
                AND T.roomtype_maxoccupancy >= ?
                AND P.occupancy_id = ?
            GROUP BY
                A.roomavailability_id,
                A.roomtype_id,
                T.roomtype_name,
                t.roomtype_description,
                T.roomtype_maxoccupancy,
                p.occupancy_id,
                O.occupancy_description,
                P.roomprice_rate,
                t.roomimage_description
            ORDER BY a.roomtype_id, p.occupancy_id', array($checkInDate, $checkOutDate, $roomQty, $totalQty, $totalQty));
    }    

    public static function getAllRoom(){
       return 
        DB::select('
            SELECT 
                    t.roomtype_id,
                    T.roomtype_name,
                    t.roomtype_description,
                    T.roomtype_maxoccupancy,
                    t.roomimage_description
            FROM (
                    select t.*, i.roomimage_description from roomtypes t
                    left join roomimages i
                    on t.roomtype_id = i.roomtype_id
                    and i.roomimage_primary = true
            ) T
            WHERE 1=1
            GROUP BY
                    t.roomtype_id,
                    T.roomtype_name,
                    t.roomtype_description,
                    T.roomtype_maxoccupancy,
                    t.roomimage_description
            ORDER BY T.roomtype_id
            '); 
    }

    public static function getAllRoomFeatures(){
       return 
        DB::select('
            SELECT 
                    T.ROOMTYPE_ID,
                    RC.ROOMFEATURE_NAME
            FROM ROOMTYPES T
            LEFT JOIN (
                SELECT C.*, F.ROOMFEATURE_NAME FROM ROOM_CONTENTS C
                    INNER JOIN ROOMFEATURES F ON C.ROOMFEATURE_ID = F.ROOMFEATURE_ID
            ) RC ON RC.ROOMTYPE_ID = T.ROOMTYPE_ID
            WHERE 1=1
            GROUP BY
                    T.ROOMTYPE_ID,
                    RC.ROOMFEATURE_NAME
            ORDER BY T.ROOMTYPE_ID
            '); 
    }

    public static function getRoomFeatures($roomtype_id){
       return 
        DB::select('
            SELECT 
                    T.ROOMTYPE_ID,
                    RC.ROOMFEATURE_NAME
            FROM ROOMTYPES T
            LEFT JOIN (
                SELECT C.*, F.ROOMFEATURE_NAME FROM ROOM_CONTENTS C
                    INNER JOIN ROOMFEATURES F ON C.ROOMFEATURE_ID = F.ROOMFEATURE_ID
            ) RC ON RC.ROOMTYPE_ID = T.ROOMTYPE_ID
            WHERE 1=1
            AND T.ROOMTYPE_ID = ?
            GROUP BY
                    T.ROOMTYPE_ID,
                    RC.ROOMFEATURE_NAME
            ORDER BY T.ROOMTYPE_ID', array($roomtype_id));
    }

    public static function getRoomImages($roomtype_id){
       return 
        DB::select('
            SELECT I.* FROM ROOMIMAGES I
        WHERE I.ROOMTYPE_ID = ?', array($roomtype_id));
    }

    public static function getRoomList($checkInDate, $checkOutDate, $totalQty, $roomQty)
    {
        return 
        DB::select('
            SELECT 
                A.roomavailability_id,
                A.roomtype_id,
                T.roomtype_name,
                t.roomtype_description,
                T.roomtype_maxoccupancy,
                p.occupancy_id,
                O.occupancy_description,
                P.roomprice_rate,
                t.roomimage_description
            FROM roomavailability A
            LEFT JOIN (
                select t.*, i.roomimage_description from roomtypes t
                left join roomimages i
                on t.roomtype_id = i.roomtype_id
                and i.roomimage_primary = true
            ) T
                ON A.roomtype_id = T.roomtype_id
            LEFT JOIN roomprices P
                ON A.roomavailability_id = P.roomprice_datetime
                AND A.roomavailability_date = P.ROOMPRICE_DATE
                AND A.roomtype_id = P.roomtype_id
            LEFT JOIN occupancies O
                ON P.occupancy_id = O.occupancy_id
            WHERE 1=1
                AND A.roomavailability_date >= ? 
                AND A.roomavailability_date < ?
                AND A.roomavailability_number >= ?
                AND T.roomtype_maxoccupancy >= ?
            GROUP BY
                A.roomavailability_id,
                A.roomtype_id,
                T.roomtype_name,
                t.roomtype_description,
                T.roomtype_maxoccupancy,
                p.occupancy_id,
                O.occupancy_description,
                P.roomprice_rate,
                t.roomimage_description
            ORDER BY a.roomtype_id, p.occupancy_id', array($checkInDate, $checkOutDate, $roomQty, $totalQty));
    }   

    public static function getRoomDetail($roomavailabilityId, $roomtypeId, $checkInDate, $checkOutDate, $roomQty, $totalQty, $occupancyId)
    {
        return 
        DB::select('
            SELECT 
                A.roomavailability_id,
                A.roomtype_id,
                T.roomtype_name,
                t.roomtype_description,
                T.roomtype_maxoccupancy,
                p.occupancy_id,
                O.occupancy_description,
                P.roomprice_rate,
                t.roomimage_description
            FROM roomavailability A
            LEFT JOIN (
                select t.*, i.roomimage_description from roomtypes t
                left join roomimages i
                on t.roomtype_id = i.roomtype_id
                and i.roomimage_primary = true
            ) T
                ON A.roomtype_id = T.roomtype_id
            LEFT JOIN roomprices P
                ON A.roomavailability_id = P.roomprice_datetime
                AND A.roomavailability_date = P.ROOMPRICE_DATE
                AND A.roomtype_id = P.roomtype_id
            LEFT JOIN occupancies O
                ON P.occupancy_id = O.occupancy_id
            WHERE 1=1
                AND A.roomavailability_id = ?
                AND T.roomtype_id = ?
                AND A.roomavailability_date >= ? 
                AND A.roomavailability_date < ?
                AND A.roomavailability_number >= ?
                AND T.roomtype_maxoccupancy >= ?
                AND P.occupancy_id = ?
            GROUP BY
                A.roomavailability_id,
                A.roomtype_id,
                T.roomtype_name,
                t.roomtype_description,
                T.roomtype_maxoccupancy,
                p.occupancy_id,
                O.occupancy_description,
                P.roomprice_rate,
                t.roomimage_description
            ORDER BY a.roomtype_id, p.occupancy_id', array($roomavailabilityId, $roomtypeId, $checkInDate, $checkOutDate, $roomQty, $totalQty, $occupancyId));
    } 
    
    public static function getAvailabilityDetail($roomtypeId, $checkInDate, $checkOutDate, $roomQty, $totalQty, $occupancyId)
    {
        return 
        DB::select('
            SELECT 
                A.roomavailability_id,
                A.roomtype_id,
                T.roomtype_name,
                t.roomtype_description,
                T.roomtype_maxoccupancy,
                p.occupancy_id,
                O.occupancy_description,
                P.roomprice_rate,
                t.roomimage_description
            FROM roomavailability A
            LEFT JOIN (
                select t.*, i.roomimage_description from roomtypes t
                left join roomimages i
                on t.roomtype_id = i.roomtype_id
                and i.roomimage_primary = true
            ) T
                ON A.roomtype_id = T.roomtype_id
            LEFT JOIN roomprices P
                ON A.roomavailability_id = P.roomprice_datetime
                AND A.roomavailability_date = P.ROOMPRICE_DATE
                AND A.roomtype_id = P.roomtype_id
            LEFT JOIN occupancies O
                ON P.occupancy_id = O.occupancy_id
            WHERE 1=1
                AND T.roomtype_id = ?
                AND A.roomavailability_date >= ? 
                AND A.roomavailability_date < ?
                AND A.roomavailability_number >= ?
                AND T.roomtype_maxoccupancy >= ?
                AND P.occupancy_id = ?
            GROUP BY
                A.roomavailability_id,
                A.roomtype_id,
                T.roomtype_name,
                t.roomtype_description,
                T.roomtype_maxoccupancy,
                p.occupancy_id,
                O.occupancy_description,
                P.roomprice_rate,
                t.roomimage_description
            ORDER BY a.roomtype_id, p.occupancy_id', array($roomtypeId, $checkInDate, $checkOutDate, $roomQty, $totalQty, $occupancyId));
    } 

    public static function getAllRoomDetail($roomtype_id)
    {
        return 
        DB::select('
            SELECT 
                    T.ROOMTYPE_ID,
                    T.ROOMTYPE_NAME,
                    T.ROOMTYPE_MAXOCCUPANCY,
                    T.ROOMTYPE_DESCRIPTION
            FROM ROOMTYPES T
            WHERE T.ROOMTYPE_ID = ?', array($roomtype_id));
    } 

    public static function getAvailabilityDate($checkInDate, $checkOutDate, $totalQty, $roomQty){
        return DB::select('SELECT
                            MIN (A .roomavailability_date) AS min_date,
                            MAX (A .roomavailability_date) AS max_date
                            FROM
                            (
                                    SELECT
                                            A .roomavailability_date
                                    FROM
                                            roomavailability A
                                    LEFT JOIN (
                                            SELECT
                                                    T .*, i.roomimage_description
                                            FROM
                                                    roomtypes T
                                            LEFT JOIN roomimages i ON T .roomtype_id = i.roomtype_id
                                            AND i.roomimage_primary = TRUE
                                    ) T ON A .roomtype_id = T .roomtype_id
                                    LEFT JOIN roomprices P ON A .roomavailability_id = P .roomprice_datetime
                                    AND A .roomavailability_date = P .ROOMPRICE_DATE
                                    AND A .roomtype_id = P .roomtype_id
                                    LEFT JOIN occupancies O ON P .occupancy_id = O.occupancy_id
                                    WHERE
                                            1 = 1
                                    AND A .roomavailability_date BETWEEN ?
                                    AND ?
                                    AND A .roomavailability_number >= ?
                                    AND T .roomtype_maxoccupancy >= ?
                            ) A', array($checkInDate, $checkOutDate, $roomQty, $totalQty));
    }
    
    public static function getRoomAvailability($id, $check_in, $check_out)
    {
        return DB::select('SELECT
                A.ROOMAVAILABILITY_ID,
                A.ROOMAVAILABILITY_DATE,
                A.ROOMTYPE_ID,
                A.ROOMAVAILABILITY_NUMBER,
                A.ROOMAVAILABILITY_RESERVED
                FROM
                    ROOMAVAILABILITY A
                WHERE 1=1
                AND A .ROOMAVAILABILITY_ID = ?
                AND (A .ROOMAVAILABILITY_DATE >= ?
                AND A.ROOMAVAILABILITY_DATE < ?)
                ORDER BY A.ROOMAVAILABILITY_DATE', array($id, $check_in, $check_out));
    }
}
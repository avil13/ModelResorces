<?php

namespace AVIL\ModelResorces;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;

class ModelResorcesController extends Controller
{
    private static $paths = [];

    public static function setPaths($options)
    {
        static::$paths = $options;
    }

    /**
     * Таблица в БД
     * @var string
     */
    private $table;

    private $fields;

    private static $path;

    public function __construct(Request $request)
    {
        static::$path = $request->path();

        foreach (static::$paths as $k => $v) {
            if(strpos(static::$path, $k) !== false){
                return $this->table = $v;
            }
        }
    }

    /**
     * Display a listing of the resource.
     *
     * GET /
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!$this->table) return 'index';

        $data = \DB::table($this->table)->select('*')->get();

        return view('modelRes::index', [
                    'path'  => static::$path,
                    'title' => $this->table,
                    'data'  => $data
                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!$this->table) return 'create';
        //
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$this->table) return 'store';
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$this->table) return 'show';

        $data = \DB::table($this->table)
                                ->select('*')
                                ->where('id', $id)
                                ->take(1)
                                ->get();

        return view('modelRes::show', [
                    'path'  => static::$path,
                    'title' => $this->table,
                    'data'  => !empty($data[0]) ? $data[0] : null
                ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$this->table) return 'edit';
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!$this->table) return 'update';
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$this->table) return 'destroy';
        //
    }
}

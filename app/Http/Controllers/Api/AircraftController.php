<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Aircraft;
use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;

class AircraftController extends Controller
{
    public function index(Request $request)
    {
        $query = Aircraft::select('id', 'name')
            ->orderBy('id', 'asc');

        // 🔥 filter by id (optional)
        if ($request->has('id')) {
            $query->where('id', $request->id);
        }

        $aircraft = $query->get();

        if ($aircraft->isEmpty()) {
            return ResponseHelper::success([], 'No aircraft found');
        }

        return ResponseHelper::success($aircraft, 'List aircraft');
    }
}

<?php

namespace Fotonica\Http\Controllers\API;

use Fotonica\ServerConfiguration;
use Illuminate\Http\Request;

use Fotonica\Http\Requests;
use Fotonica\Http\Controllers\Controller;

class ServerController extends Controller
{
    public function update(Requests\ServerConfigurationRequest $request, ServerConfiguration $configuration)
    {
        $configuration->update($request->all());
        return response()->json($configuration->toArray());
    }
}

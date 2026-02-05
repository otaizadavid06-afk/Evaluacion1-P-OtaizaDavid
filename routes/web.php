<?php

use App\Http\Controllers\Pacientecontroller;
use Illuminate\Support\Facades\Route;
use App\Models\Paciente;

Route::resource('pacientes', Pacientecontroller::class);
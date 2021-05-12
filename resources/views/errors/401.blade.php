@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('You are not an authorized chef that suite to be a chef :p'))

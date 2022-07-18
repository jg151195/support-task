@extends('create-layout')

@section('content')
    
    <form action="/support_task/insert">
    
        <label for="subject">Subject: </label>
        <input type="text" name="subject">

        <label for="is_urgent">is it Urgent ?</label>
        <input type="checkbox" name="is_urgent">

        <label for="description">Description: </label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

    </form>


@endsection
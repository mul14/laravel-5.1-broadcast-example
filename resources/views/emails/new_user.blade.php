@extends('emails.layout')

@section('title', 'Welcome')

@section('content')
<!-- content -->
<div class="content">
  <table>
    <tr>
      <td>
        <h1>Welcome, {!! $name !!}</h1>

        <p>Horee!! Selamat datang di... dimana ya? :/</p>

        <p>Pokoknya disini enak. Bisa makan dan tidur santai sambil berendam air panas >.<</p>
        <table>
          <tr>
            <td class="padding">
              <p><a href="#" class="btn-primary">Klik dimari untuk gak ngapa-ngpain :D</a></p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</div>
<!-- /content -->
@stop

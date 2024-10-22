@extends('layout')

@section('main')
    İletişim Sayfası İçeriği

    <br />
    <br />
    @if($errors->any())
     HATALI VERİ GİRİŞİ

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error  }}</li>
            @endforeach
        </ul>

    @endif
<br />
    <br/>
    İletişim Formu

    <form action="" method="POST">
        @csrf

        İsminiz:
        <br /><input type="text" name="isim" value="{{old('isim') }} "/>
        <br /> <br />
        Konu:
        <br/>
        <select name="konu" >{{old('konu')}}">
            <option> Öğrenci İşleri</option>
            <option> Yemekhane</option>
            <option> Diğer</option>
        </select>
        <br/> <br />
        Mesajınız:
        <br/>
        <textarea name="mesaj">{{old('mesaj')}}</textarea>
        <br/> <br/>
        <input type="submit" value="Mesajı Gönder"/>
    </form>
@endsection

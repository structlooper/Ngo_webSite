<h1>From {{ $data['fromMail'] }},</h1>

<h4>Mail Regarding</h4><h3>{{ $data['subject'] }},</h3>
<div class="container bg-seconday">
    Hey Sir,
        I am {{ $data['name'] }}

    <div class="container bg-white">

        {{ $data['message'] }},
    </div>

</div>

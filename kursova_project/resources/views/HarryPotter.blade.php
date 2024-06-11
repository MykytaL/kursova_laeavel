@extends('base')

@section('title')Гаррі Поттер@endsection

@section('base_menu')
    <h1 style="text-align: center; margin-top: 20px">Гаррі Поттер</h1>
    <div style="display: flex; align-items: flex-start; margin: 5%">
        <img style="width: 10%; margin-right: 20px" src="images/Harry.jpg" alt="Harry Potter">
        <h3 style="font-size: 18px; line-height: 1.6;">
            «Гаррі Поттер і Філософський камінь» <br>
            (англ. Harry Potter and the Philosophers/ Sorcerer's Stone) — перший з серії фільмів про хлопчика-чарівника Гаррі Поттера,
            екранізація однойменного романа Джоан Роулінг.<br>
            Джоан Роулінг продала права на створення фільмів до перших чотирьох книг Гаррі Поттера в 1999 році за скромну суму
            в один мільйон фунтів стерлінгів.<br> Але важливішим є те що, було обумовлено, що письменниця одержуватиме певну частину
            від зборів кожного з фільмів, і матиме значний контроль над всіма стадіями виробництва картин.
            <br> поставила неодмінну умову, щоб усі актори в майбутніх фільмах повинні бути британцями.<br>
            Лише в четвертому фільмі, де це було необхідне згідно з книгою, з'явилися актори з інших країн.<br>
            Тираж книги "Гаррі Поттер і філософський камінь" у 1997 році налічував лише 500 примірників,<br>
            300 з яких одразу потрапили до бібліотек.
            За кожну із цих книжок шанувальники і колекціонери готові заплатити £30 000.
        </h3>
    </div>

    <div class="container">
        <div class="create-post">
            <div>
                @foreach($posts as $post)
                    <div style="margin-bottom: 10px;">
                        <span style="margin-right: 10px;">{{$post->user_name}}</span>
                        <span style="margin-right: 10px;">{{$post->email}}</span>
                        <span>{{$post->comment}}</span>
                        <form action="{{ route('post.destroy', $post->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Видалити</button>
                        </form>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Редагувати</a>


                    </div>
                @endforeach
            </div>
            <h5>Ваша оцінка</h5>
            <form action="" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="input-group mb-3">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="user_name" name="user_name" required><br><br>
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="email" name="email" required><br><br>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="comment" name="comment">
                    </div>

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success"> Send </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

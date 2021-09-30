<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Policy</title>
</head>
<body>
    <header>
        <h1>{{$title}}</h1>
        <nav>
            @foreach ($navbar as $link => $value)
            <a href="{{route($link)}}"> {{$value}}</a> 
            @endforeach
        </nav>
        <hr>
    </header>

    <main>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium deserunt aliquid possimus delectus, iure animi nihil. Minima amet perferendis inventore odit officiis voluptate aut expedita voluptates nulla quae. Labore eaque cumque omnis sint neque sit ipsam possimus asperiores, incidunt quis quidem qui adipisci veritatis inventore quam voluptatibus dicta voluptate, a sequi corrupti nam sed vero. Voluptatibus repellendus modi aut quod nam, ab exercitationem quasi maiores dicta. Perspiciatis doloribus hic incidunt nostrum nesciunt delectus vero voluptate laudantium mollitia numquam nemo, quibusdam alias, eveniet assumenda iusto labore accusantium consectetur, natus possimus corrupti. Esse maiores qui delectus accusantium provident tenetur consequatur fugiat voluptate quam placeat harum omnis quas dolor ex, adipisci possimus, eligendi nostrum assumenda animi dicta error suscipit. Nobis vero quas vitae sed esse a nihil libero eveniet repudiandae eos rem officiis necessitatibus molestiae dignissimos placeat temporibus, explicabo nostrum mollitia? Sint inventore laborum dolores ipsum eum doloremque dolorem quaerat vitae rem ipsam ullam, nobis necessitatibus, obcaecati dignissimos atque laudantium molestiae voluptatibus ab corporis itaque sunt unde, in provident. Ratione aliquid labore culpa voluptatibus nisi id minima, nobis mollitia libero nihil laborum recusandae. Reprehenderit amet repudiandae vero! Blanditiis expedita obcaecati cum maxime, illo eveniet veritatis dignissimos, consectetur voluptas impedit quae officia, non ipsam.</p>
    </main>

    
</body>
</html>
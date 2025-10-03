@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <h1 class="display-4 mb-4">À propos</h1>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h3 mb-3 text-success">Mot du Président</h2>
                    <p>Depuis sa création en 1986, l'École Marocaine des Sciences de l'Ingénieur a axé son projet pédagogique sur la qualité de sa formation et sur une forte employabilité de ses lauréats. L'excellence académique de son corps professoral, son observatoire des métiers et l'intégration de l'évolution technologique ont contribué à asseoir sa notoriété. L'école prête un fort intérêt pour la recherche, le développement et l'innovation. Elle met tout en œuvre pour porter haut et fort les ambitions et idéaux de notre pays en matière d'invention.</p>
                    <p>Dans ce sens, elle aspire à continuer à le représenter honorablement dans de prestigieux événements internationaux. Depuis 38 ans au service de l'économie marocaine, l'EMSI a pour ambition de contribuer au développement du continent et à la formation des futurs leaders Panafricains.</p>
                    <hr>
                    <h4 class="mb-2">Dr Kamal DAISSAOUI, co-fondateur de l'EMSI</h4>
                    <p>Monsieur Kamal DAISSAOUI a commencé sa carrière en tant qu'enseignant chercheur en informatique à l'Université Nice-Sophia-Antipolis en France en 1981, avant d'intégrer l'Ecole Hassania des Travaux Publics. Il est actuellement président du Groupe EMSI (Ecole Marocaine des Sciences de l'Ingénieur) où il a accompagné plusieurs chercheurs et encadré des dizaines d'innovations grâce auxquelles cette école a pu obtenir plus de 83 prix et médailles, et contribuer à l'enrichissement du portefeuille de la propriété intellectuelle marocaine et à l'amélioration du classement du Maroc dans l'indice mondial de l'innovation.</p>
                    <p>Outre la présidence de la Fédération de l'Enseignement Privé affiliée à la CGEM, Monsieur DAISSAOUI a été membre de la CNACES (Commission Nationale de Coordination de l'Enseignement Supérieur). Il a présidé plusieurs associations de développement, culturelles et sportives. Il a été aussi président du Conseil de l'Arrondissement Sidi Belyout pour deux mandats et membre du Conseil de la ville de Casablanca.</p>
                    <p>Monsieur Kamal DAISSAOUI est titulaire d'un Doctorat en informatique de l'Université de Nice Sophie Antipolis en France. Il a obtenu plusieurs prix et décorations en reconnaissance pour sa contribution à l'avancement des sciences et de l'innovation dans le monde. Il a été fait Chevalier de l'Ordre des sciences et de l'innovation lors du Grand Salon international des inventions, tenu en 2019 à Londres et Officier de l'Ordre des sciences et de l'innovation lors du Grand Salon international Euroinvent tenu en 2020 en Roumanie. Il a également décroché le Award plaque d'invention au concours international d'Invention & Trade Expo ITE 2022 à Londres.</p>
                </div>
            </div>
            <h2 class="h3 mb-3 text-success">Notre histoire</h2>
            <div class="text-center mb-4">
                <img src="{{ asset('assets/images/aba.png') }}" alt="Notre histoire" style="max-width:100%; height:auto;" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection 
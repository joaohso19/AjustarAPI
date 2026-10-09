// Funções de capa usadas em create.php e update.php
// Filmes: iTunes Search API | Séries: TVMaze API (as duas são gratuitas e sem chave)

const capasDiv = document.getElementById('capas');
const capaInput = document.getElementById('capa');
const preview = document.getElementById('preview-capa');
const semCapa = document.getElementById('sem-capa');

async function buscaFilmes(nome) {
    const url = 'https://itunes.apple.com/search?media=movie&entity=movie&limit=6&term=' + encodeURIComponent(nome);
    const resp = await fetch(url);
    const dados = await resp.json();
    return dados.results
        .filter(f => f.artworkUrl100)
        .map(f => f.artworkUrl100.replace('100x100bb', '600x600bb'));
}

async function buscaSeries(nome) {
    const resp = await fetch('https://api.tvmaze.com/search/shows?q=' + encodeURIComponent(nome));
    const dados = await resp.json();
    return dados
        .filter(s => s.show.image)
        .slice(0, 6)
        .map(s => s.show.image.original || s.show.image.medium);
}

function mostraPreview(url) {
    if (url) {
        preview.src = url;
        preview.style.display = 'block';
        semCapa.style.display = 'none';
    } else {
        preview.style.display = 'none';
        semCapa.style.display = 'flex';
    }
}

function escolheCapa(url) {
    capaInput.value = url;
    mostraPreview(url);
    document.querySelectorAll('.capa-opcao').forEach(function (img) {
        img.classList.toggle('escolhida', img.src === url);
    });
}
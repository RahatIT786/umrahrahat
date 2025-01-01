<!-- Google Font Family link -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@yield('css')
@vite(['node_modules/quill/dist/quill.snow.css', 'node_modules/quill/dist/quill.bubble.css'])
@vite([ 'resources/scss/icons.scss', 'resources/scss/style.scss'])=
@vite([ 'resources/js/config.js'])

<style>

#departure-date{
    border: 1px solid rgba(0, 0, 0,0.1) !important;
   padding-left: 20px;
   border-radius: 10px;
}
#departure-months{
    padding:20px;

}
</style>
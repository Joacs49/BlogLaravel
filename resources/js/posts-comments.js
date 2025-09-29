const btnPosts = document.getElementById("btn-posts");
const btnComentarios = document.getElementById("btn-comentarios");
const sectionPosts = document.getElementById("section-posts");
const sectionComentarios = document.getElementById("section-comentarios");

sectionPosts.classList.remove("hidden");
sectionComentarios.classList.add("hidden");

btnPosts.addEventListener("click", () => {
    sectionPosts.classList.remove("hidden");
    sectionComentarios.classList.add("hidden");

    btnPosts.classList.add("bg-gray-200");
    btnComentarios.classList.remove("bg-gray-200");
});

btnComentarios.addEventListener("click", () => {
    sectionComentarios.classList.remove("hidden");
    sectionPosts.classList.add("hidden");

    btnComentarios.classList.add("bg-gray-200");
    btnPosts.classList.remove("bg-gray-200");
});

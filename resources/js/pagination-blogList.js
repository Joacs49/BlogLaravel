export function pagination() {
    return {
        currentPage: 1,
        perPage: 6,
        posts: [
            { id: 1, title: "Post 1", excerpt: "Resumen del post 1" },
            { id: 2, title: "Post 2", excerpt: "Resumen del post 2" },
            { id: 3, title: "Post 3", excerpt: "Resumen del post 3" },
            { id: 4, title: "Post 4", excerpt: "Resumen del post 4" },
            { id: 5, title: "Post 5", excerpt: "Resumen del post 5" },
            { id: 6, title: "Post 6", excerpt: "Resumen del post 6" },
            { id: 7, title: "Post 7", excerpt: "Resumen del post 7" },
            { id: 8, title: "Post 8", excerpt: "Resumen del post 8" },
            { id: 9, title: "Post 9", excerpt: "Resumen del post 9" },
            { id: 10, title: "Post 10", excerpt: "Resumen del post 10" },
        ],
        paginatedPosts() {
            const start = (this.currentPage - 1) * this.perPage;
            return this.posts.slice(start, start + this.perPage);
        },
        totalPages() {
            return Math.ceil(this.posts.length / this.perPage);
        },
        nextPage() {
            if(this.currentPage < this.totalPages()) this.currentPage++;
        },
        prevPage() {
            if(this.currentPage > 1) this.currentPage--;
        },
        goToPage(n) {
            this.currentPage = n;
        }
    }
}

async function loadBlogs() {
    try {
        const response = await fetch('/CPCS403-Final/admin/fetch_blogs.php'); // Adjust the path if needed
        const blogs = await response.json();

        const blogContent = document.querySelector('.blog-content');
        blogContent.innerHTML = ''; // Clear existing content

        blogs.forEach(blog => {
            const article = `
                <article class="blog-post">
                    <a href="/CPCS403-Final/index.php?page=fullblog&id=${blog.id}">
                        <img src="/CPCS403-Final/uploads/${blog.image}" alt="${blog.title}" class="blog-img" />
                    </a>
                    <h2 class="blog-title">
                        <a href="/CPCS403-Final/index.php?page=fullblog&id=${blog.id}">${blog.title}</a>
                    </h2>
                    <address class="blog-author">
                        Written by <cite>${blog.author}</cite>, ${new Date(blog.created_at).toLocaleDateString()}
                    </address>
                    <p class="blog-intro">
                        ${blog.content.substring(0, 150)}... 
                        <a href="/CPCS403-Final/index.php?page=fullblog&id=${blog.id}">Read more</a>
                    </p>
                </article>
            `;
            blogContent.innerHTML += article;
        });
    } catch (error) {
        console.error('Error loading blogs:', error);
    }
}


window.onload = loadBlogs;

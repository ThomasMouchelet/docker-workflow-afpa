import { useState } from 'react';

const ShowData = () => {
    const [posts, setPosts] = useState([]);
    const [currentPage, setCurrentPage] = useState(1);

    const handleClick = () => {
        showPosts()
    }
    const showPosts = (newPage) => {
        newPage === undefined ? newPage = currentPage : setCurrentPage(newPage);
        fetch(`http://localhost:8000/api/posts?itemsPerPage=10&page=${newPage}`)
            .then(res => res.json())
            .then(data => setPosts(data["hydra:member"]))
    }
    const showPrevPage = () => {
        const newPage = currentPage > 1 && currentPage - 1
        showPosts(newPage)
    }
    const showNextPage = () => {
        const newPage = currentPage + 1
        showPosts(newPage)
    }

    return (
        <div>
            <button onClick={handleClick}>Show data</button>
            <ul>
                {posts.map(post => <li key={post.id}>{post.title}</li>)}
            </ul>
            <button onClick={showPrevPage}>prev</button>
            <button onClick={showNextPage}>next</button>
        </div>
     );
}
 
export default ShowData;
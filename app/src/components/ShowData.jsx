import { useState } from 'react';

const ShowData = () => {
    const [posts, setPosts] = useState([]);

    const handleClick = () => {
        fetch('http://localhost:8000/api/posts')
            .then(res => res.json())
            .then(data => setPosts(data["hydra:member"]))
    }

    return (
        <div>
            <button onClick={handleClick}>Show data</button>
            <ul>
                {posts.map(post => <li key={post.id}>{post.title}</li>)}
            </ul>
        </div>
     );
}
 
export default ShowData;
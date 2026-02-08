const express = require("express");
const app = express();
const port = 8082;
const fs = require("fs");

app.get("/", (req, res) => {
  fs.readFile("posts.json", (err, data) => {
    if (err) throw err;
    let posts = JSON.parse(data);
    posts = posts.map((post) => {
      return {
        id: post.id,
        title: post.title.toUpperCase(),
      };
    });
    res.json(posts);
  });
});

app.listen(port, () => {
  console.log(`Node listening on port ${port}`);
});

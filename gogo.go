package main

import (
    "encoding/json"
    "fmt"
    "io/ioutil"
    "net/http"
    "strings"
)

type Post struct {
    Id    int    `json:"id"`
    Title string `json:"title"`
}

func main() {
    http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {
        jsonData, err := ioutil.ReadFile("./posts.json")
        if err != nil {
            http.Error(w, "Failed to read JSON", http.StatusInternalServerError)
            return
        }

        var posts []Post
        json.Unmarshal(jsonData, &posts)

        for i := range posts {
            posts[i].Title = strings.ToUpper(posts[i].Title)
        }

        w.Header().Set("Content-Type", "application/json")
        json.NewEncoder(w).Encode(posts)
    })

    fmt.Println("Go server starting on :8083")
    http.ListenAndServe(":8083", nil)
}
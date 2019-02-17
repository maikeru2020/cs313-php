function insertScriptureData() {
    book = document.getElementById('book').value;
    chapter = document.getElementById('chapter').value;
    verse = document.getElementById('verse').value;
    content = document.getElementById('content').value;
    topics = document.getElementsByName('topics');
    addTopic = document.getElementById('addTopic').checked;
    newTopic = document.getElementById('newTopic').value;

    
    $.ajax({
        type: "get",
        url: 'insert_data.php',
        data: {
            book: book,
            chapter: chapter,
            verse: verse,
            content: content,
            topics: topics,
            addTopic: addTopic,
            newTopic: newTopic
        },
        dataType: 'html',
        success: function(response){
            $('#scriptureList').html(response)
        }
    });

}
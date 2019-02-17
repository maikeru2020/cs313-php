<?php
   $book = $_GET['book'];
   $chapter = $_GET['chapter'];
   $verse = $_GET['verse'];
   $content = $_GET['content'];
   $topics = $_GET['topics'];
   $db->query("INSERT INTO scriptures (book, chapter, verse, content) VALUES ('$book', '$chapter', '$verse', '$content')");
   $scriptureId = $db->lastInsertId('scriptures_scripture_id_seq');
   foreach ($topics as $topicId) {
       $db->query("INSERT INTO scriptures_topics (scripture_id, topic_id) VALUES ($scriptureId, $topicId)");
   }    

   if (isset($_GET['addTopic'])) {
       $newTopic = $_GET['newTopic'];
       $db->query("INSERT INTO topics (topic_name) VALUES ('$newTopic')");
       $topicId = $db->lastInsertId('topics_topic_id_seq');
       $db->query("INSERT INTO scriptures_topics (scripture_id, topic_id) VALUES ($scriptureId, $topicId)");
   }
?>

<!-- ================================================================
     QUIZ
     ================================================================ -->
<section id="quiz">
<div class="container">
<span class="section-label">// 03 — hard sf litmus test</span>
<h2>Are You Actually a Hard SF Reader?</h2>
<p class="mt1">Five questions. No curves. Real hard SF knowledge only.</p>

<?php if ($submitted_form === 'quiz' && $quiz_score !== null): ?>
<div class="quiz-score">
  <div>YOUR SCORE</div>
  <span><?php echo $quiz_score; ?>/5</span>
  <div style="margin-top:0.5rem;font-size:0.85rem;color:var(--text)">
    <?php
    if ($quiz_score === 5) echo "// FULL MARKS — you belong here. Submit a book.";
    elseif ($quiz_score >= 3) echo "// SOLID HARD SF READER — welcome to the hub.";
    elseif ($quiz_score >= 1) echo "// YOU KNOW THE TERRITORY — dig deeper.";
    else echo "// START WITH HAL CLEMENT. COME BACK.";
    ?>
  </div>
</div>
<?php endif; ?>

<form method="POST" action="<?php echo $form_action; ?>#quiz">
<input type="hidden" name="form_type" value="quiz">

<?php foreach ($quiz_questions as $i => $q): ?>
<div class="quiz-q">
  <p><?php echo ($i+1) . '. ' . htmlspecialchars($q['q']); ?></p>
  <?php foreach ($q['a'] as $j => $ans): ?>
  <label class="quiz-option">
    <input type="radio" name="q<?php echo $i; ?>" value="<?php echo $j; ?>"
      <?php if ($submitted_form === 'quiz' && isset($_POST["q$i"]) && intval($_POST["q$i"]) === $j) echo 'checked'; ?>>
    <span><?php echo htmlspecialchars($ans); ?></span>
  </label>
  <?php endforeach; ?>
</div>
<?php endforeach; ?>

<button type="submit" class="btn mt1">// SUBMIT ANSWERS</button>
</form>
</div>
</section>

<!-- ================================================================
     REVIEW A BOOK
     ================================================================ -->
<section id="review">
<div class="container">
<span class="section-label">// 04 — community</span>
<h2>Review a Book</h2>
<p class="mt1">Read something in the directory? Leave a review. Reviews are held for moderation before appearing.</p>
<p class="mono" style="font-size:0.75rem;color:var(--text-dim);margin-top:0.5rem;">/* TODO: store to PlanetScale reviews table — email queue at launch */</p>

<?php if ($submitted_form === 'review'): ?>
<div class="success-msg">// REVIEW RECEIVED — queued for moderation. Thank you.</div>
<?php endif; ?>

<div class="form-wrap">
<form method="POST" action="<?php echo htmlspecialchars("mailto:$site_email"); ?>" enctype="text/plain">
<input type="hidden" name="form_type" value="review">
<div class="two-col">
  <div class="form-group">
    <label for="r_name">Your Name / Handle</label>
    <input type="text" id="r_name" name="reviewer_name" placeholder="e.g. DeltaV_Reader" required>
  </div>
  <div class="form-group">
    <label for="r_email">Email (not published)</label>
    <input type="email" id="r_email" name="reviewer_email" placeholder="you@example.com">
  </div>
</div>
<div class="form-group">
  <label for="r_book">Book Title</label>
  <input type="text" id="r_book" name="book_title" placeholder="Title of the book you're reviewing" required>
</div>
<div class="form-group">
  <label for="r_rating">Rating</label>
  <select id="r_rating" name="rating">
    <option value="5">5 — Mandatory reading for any hard SF fan</option>
    <option value="4">4 — Solid hard SF, recommended</option>
    <option value="3">3 — Decent, some handwaving</option>
    <option value="2">2 — Weak on the science</option>
    <option value="1">1 — Misleadingly labelled as hard SF</option>
  </select>
</div>
<div class="form-group">
  <label for="r_text">Review</label>
  <textarea id="r_text" name="review_text" placeholder="Your review — what works, what doesn't, how hard is the science?" required></textarea>
</div>
<button type="submit" class="btn">// SUBMIT REVIEW</button>
<span class="php-comment" style="margin-left:1rem;">/* held for approval */</span>
</form>
</div>
</div>
</section>


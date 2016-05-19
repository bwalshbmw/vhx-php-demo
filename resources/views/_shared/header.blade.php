<nav class="row padding-small pos-absolute pos-top pos-left z-high fill-width padding-right-xxlarge">
  <div class="col small-1-2 padding-left-small text-left">
    <a href="/"><i class="icon-camera-white icon--large"></i><i class="symbol-wintergarten-white"></i></a>
  </div>

  @if ($loggedIn)
  <div class="col small-1-2 padding-top-small padding-right-medium text-right">
    @if ($hasBack)
      <a href="/" class="text--white text--bold padding-top-small">< Back to Library</a> <span class="text--bold text--white is-transparent inline padding-horz-small">|</span>
    @endif
    <a href="/logout" class="text--white text--bold padding-top-small">Log Out</a>
  @else
  <ul class="col small-1-2 padding-top-small padding-right-medium text-right list-inline">
    @if ($hasBack)
      <li><a href="/" class="text--white text--bold padding-top-small">< Back to Library</a> <span class="text--bold text--white is-transparent inline padding-horz-small">|</span> </li>
    @endif
    <li><a class="text--white text--bold margin-right-medium" href="/join" data-modal-open="join">Join</a></li>
    @unless ($hasBack)
      <li><a class="text--white text--bold" href="/login" data-modal-open="login">Login</a></li>
    @endunless
  </ul>
  @endif
</nav>

<a href="http://dev.vhx.tv" data-component="vhx-sticker" class="pos-absolute pos-top pos-right z-top text-center padding-small">
  <div class="contain pos-relative z-1">
    <h1 class="icon--center icon-vhx-white icon--large inline">VHX</h1>
  </div>
</a>
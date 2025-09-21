<style>
.info-section {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  background: rgb(37,37,37);
  padding: 2.5rem 0 2.5rem 0;
}
@media (max-width: 900px) {
  .info-section {
    flex-direction: column;
    gap: 2rem;
    margin-left: auto;
    margin-right: auto;
    align-items: center;
  }
}
.info-block {
  display: flex;
  align-items: flex-start;
  gap: 1.2rem;
  min-width: 0;
  max-width: 350px;
  flex: 1 1 0;
}
.info-img {
  width: 48px;
  height: 48px;
  object-fit: contain;
  margin-top: 0.2rem;
}
.info-content {
  display: flex;
  flex-direction: column;
  min-width: 0;
}
.info-title {
  color: #fff;
  font-size: 1.5rem;
  font-weight: 500;
  font-family: 'Open Sans',sans-serif;
  margin-bottom: 0.2rem;
  word-break: break-word;
}
.info-desc {
  color: #888;
  font-size: 1.08rem;
  font-family: 'Open Sans',sans-serif;
  word-break: break-word;
}
</style>
<div class="info-section">
  <div class="info-block">
    <img src="/first.png" alt="Access to source code" class="info-img">
    <div class="info-content">
      <div class="info-title">Access to source code</div>
      <div class="info-desc">Create powerful bootstrap landing pages with megapack.</div>
    </div>
  </div>
  <div class="info-block">
    <img src="/second.png" alt="Bootstrap framework" class="info-img">
    <div class="info-content">
      <div class="info-title">Bootstrap framework</div>
      <div class="info-desc">Create powerful bootstrap landing pages with megapack.</div>
    </div>
  </div>
  <div class="info-block">
    <img src="/third.png" alt="Sales charts" class="info-img">
    <div class="info-content">
      <div class="info-title">Sales charts</div>
      <div class="info-desc">Create powerful bootstrap landing pages with megapack.</div>
    </div>
  </div>
</div>

import '../css/index.css'

import Popover from './components/popover'
import StickyNav from './components/sticky-nav'
import Accordion from '../../components/global/accordion/accordion'
import Preloader from '../../components/global/preloader/preloader'
import Parallax from './components/parallax'
import ButtonHovers from './components/btn-hovers'
import Scroller from './components/scroller'
import DesktopMenu from '../../components/global/header/desktop-menu/desktop-menu'
import MobileMenu from '../../components/global/header/mobile-menu/mobile-menu'

let hash = ''
if (window.location.hash) {
  hash = window.location.hash
  if (hash != '#info-hub') {
    history.pushState('', '', window.location.pathname)
  }
}


document.addEventListener('DOMContentLoaded', function () {
  gsap.defaults({
    ease: 'none',
    duration: 2,
  })
  StickyNav('header')
  Parallax()
  PostContent()

  // const smoother = ScrollSmoother.create({
  //   content: '#smooth-content',
  //   smooth: 1, // how long (in seconds) it takes to "catch up" to the native scroll position
  //   effects: true, // looks for data-speed and data-lag attributes on elements,
  //   normalizeScroll: !!window.normalizeScroll,
  // })

  window.addEventListener('toggle-modal', e => {
    const open = e.detail
    if (open) {
      document.body.classList.add('overflow-hidden')
    } else {
      document.body.classList.remove('overflow-hidden')
    }
  })

  if (hash) {
    document.getElementById(hash.replace('#', ''))?.scrollIntoView()
  }
})

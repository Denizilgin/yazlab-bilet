$(document).ready(function(){
    $('#buspage').click(function(){
           var Tl = new TimelineMax()
           var nextbutton = $('.screen-home__bus-page')
           var screenBottom = $('.screen-bottom');
                   Tl
                       // .fromTo('.screen-home__bus-page', '0.3', {scale: 1, ease:Expo.easeInOut}, {scale: 1.2, ease: Expo.easeInOut }, '0.6')
                       // .to('.screen-home__bus-page', '0.3', {scale: 1, ease:Expo.easeInOut, onComplete: clkAnimComplete})
                       .to('.screen-home__inside-wave', '0.3', {width: 52, height: 52 })
                       .to('.screen-home__inside-wave', '0.3', {opacity: 0, onComplete: clkAnimComplete})
                       function clkAnimComplete() {
                           // .to('.screen-home__inside-wave', '0.3', {width: 100, height: 100 })
                           Tl.to('#formdetail', 0.1, {scale: 0.9, y: 5, opacity:0, ease: Power2.easeIn})
                           Tl.to('.screen-home__recent-search', 0.1, {scale: 0.9, y: 5, opacity:0, ease: Power2.easeIn}, '0')
                           Tl.to('.screen-bottom', 0.1, {opacity: 0}, '0')
                           Tl.to(nextbutton, 1, {rotation: 720, scale: 0.4, borderWidth: 0, ease: Expo.easeOut})
                           Tl.to('.screen-home__bus-arrow-wrap', 1, {scale: 0, opacity: 0, ease: Expo.easeOut}, '0')
                           Tl.to('.line', 0.6, {width: 0}, '0.6')
                           Tl.to('.screen-home__submit-wrap', 0.6, {width: 375, height: 90, x: -15, y: -409, ease: Expo.easeOut })
                           Tl.to(nextbutton, 0.6, {scale: 1, width: 375, height: 90, borderRadius: 0, ease: Expo.easeOut, onStart: visibleBox})
                           Tl.to(screenBottom, 0.1, {opacity: 1})
                           Tl.to('.screen-bus', 0, {opacity:1})
                           Tl.to('.screen-home', 0.6, {opacity: 0})
                           Tl.to('.screen-home', 0, {display: 'none'})
                           function visibleBox() {
                               Tl.staggerTo('.screen-bus__travels-col', 0.4, {opacity: 1, y: 0, ease: Expo.easeIn}, '0.1'); 
                               console.log('start');
                           } 
                       }
        });
     
   var TlWaveAnim = new TimelineMax({repeat: -1});
       TlWaveAnim
                 .to('.screen-home__inside-wave', 0.8, {width: '100%', height: '100%'});
   });


   // ------------------------------------------------------------------ TARİH SEÇİCİ -------------------------------------------------------
Vue.component("calendar", {
    template: `
    <div class="calendar">
      <input
        type="text"
        v-model="date"
        @focus="focus()"
        @blur="blur()"
        placeholder="Tarih seçiniz"
      >
      <div 
        class="calendar-layout"
        v-if="active"
        @mousedown.prevent
      >
        <div class="calendar-header">
          <div class="row">
            <i 
              class="material-icons"
              @click="setPreviousMonth()"
            >
              chevron_left
            </i>
            <div class="calendar-title">
              {{ monthYearFormatted }}
            </div>
            <i
              class="material-icons"
              @click="setNextMonth()"
            >
              chevron_right
            </i>
          </div>
          <div class="calendar-days">
            <div 
              class="day"
              v-for="day in days"
              :key="day"
            >
              {{ day | trimThreeChar }}
            </div>
          </div>
        </div>
        <div class="calendar-body">
          <div 
            class="calendar-row"
            v-bind:class="{ 'swipe-left': swipeLeft, 'swipe-right': swipeRight }"
            v-for="(row, index) in calendarDays"
            :key="index"
          >
            <div 
              class="calendar-day"
              :class="{disabled: isDisabled(cell), selected: isSelected(cell)}"
              v-bind:style="{height: cellHeightUnit}"
              v-for="(cell, index) in row"
              :key="index"
              @click="selectDay(cell)"
            >
              {{ cell.day }}
            </div>
          </div>
        </div>
        <div class="calendar-footer">
        </div>
      </div>
    </div>
    `,
    data: () => ({
      date: '',
      activeDate: '202308',
      activeDay: '',
      active: false,
      days: ['Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi', 'Pazar'],
      monthes: {
        '01': 'Ocak',
        '02': 'Şubat',
        '03': 'Mart',
        '04': 'Nisan',
        '05': 'Mayis',
        '06': 'Haziran',
        '07': 'Temmuz',
        '08': 'Ağustos',
        '09': 'Eylül',
        '10': 'Ekim',
        '11': 'Kasım',
        '12': 'Aralık',
      },
      calendarDays: [],
      cellHeight: '',
      swipeLeft: false,
      swipeRight: false
    }),
    filters: {
      trimThreeChar(item) {
        return item.substr(0, 3);
      }
    },
    computed: {
      monthYearFormatted() {
        // Returns the current month name followed by the current year
        return this.monthes[this.activeDate.substr(4, 2)] + ' ' + this.activeDate.substr(0, 4);
      },
      cellHeightUnit() {
        return this.cellHeight + 'px';
      }
    },
    methods: {
      focus() {
        this.active = true;
        this.cellHeight = (this.$el.querySelector('input').offsetWidth) / 7;
      },
      blur() {
        this.active = false;
      },
      getCurrentDate() {
        // Returns today's date with format YYYY/MM/DD
        return new Date().toJSON().slice(0,10).replace(/-/g,'/');
      },
      getCurrentDay() {
        // Returns current day within range 1-31
        return new Date().getDate();
      },
      getCurrentMonth() {
        // Returns the current month as a 2 digits number
        return ( "0" + (new Date().getMonth() + 1)).slice(-2);
      },
      getPreviousMonth(month) {
        if (parseInt(month) == 1)
          return '12';
        else 
          return ( "0" + (parseInt(month) - 1)).slice(-2);
      },
      getNextMonth(month) {
        if (parseInt(month) == 12)
          return '01';
        else 
          return ( "0" + (parseInt(month) + 1)).slice(-2);
      },
      getCurrentYear() {
        // Returns the current year as a 4 digits number
        return new Date().getFullYear();
      },
      getNumberOfDaysInMonth(year, month) {
        return new Date(year, month, 0).getDate();
      },
      getNumberOfDaysInPreviousMonth(year, month) {
          if (month == '01') 
            return new Date(year - 1, this.getPreviousMonth(month), 0).getDate();
          else
            return new Date(year, this.getPreviousMonth(month), 0).getDate();
      },
      getNumberOfDaysInNextMonth() {
        if (this.getNextMonth() == '12')
          return new Date(this.getCurrentYear() + 1, this.getNextMonth(), 0).getDate();
        else
          return new Date(this.getCurrentYear(), this.getNextMonth(), 0).getDate();
      },
      getFirstDayOfMonth(year, month) {
        if (new Date(year, parseInt(month) - 1, 1).getDay() - 1 == -1)
          return 6
        else 
          return new Date(year, parseInt(month) - 1, 1).getDay() - 1;
      },
      getLastDayOfMonth(year, month) {
        return new Date(year, parseInt(month) + 1, 0).getDay();
      },
      populateCalendar(year, month) {
        this.calendarDays = [];
        const firstDayOfMonth = this.getFirstDayOfMonth(year, month);
        const numberOfRows = Math.ceil(this.getNumberOfDaysInMonth(year, month) / 7);
        let dayNumber = 1;
        // Number of rows to display
        let increment = 1;
        for (let x = 0; x <= numberOfRows; x++) {
          let decrement = 0;
          let row = [];
          let endOfMonth = false;
          // Fills the first row with previous month ending days
          if (x == 0) {
            for (let i = 0; i < firstDayOfMonth; i++) {
              if (parseInt(month) == 1)
                row.push({ day: this.getNumberOfDaysInPreviousMonth(year, month) - decrement, month: this.getPreviousMonth(month), year: parseInt(year) - 1});
              else 
                row.push({ day: this.getNumberOfDaysInPreviousMonth(year, month) - decrement, month: this.getPreviousMonth(month), year: parseInt(year)});
              decrement++;
            }
            row.reverse();
          }
          // Fills the rest of the rows
          for (let y = row.length; y < 7  && y < this.getNumberOfDaysInMonth(year, month); y++) {
            // While current month days are not excedeed
            if (dayNumber <= this.getNumberOfDaysInMonth(year, month)) {
              row.push({day: dayNumber, month: month, year: year});
              dayNumber++;
            } else {
              // Fills space left 
              for (let j = row.length; j < 7; j++) {
                if (parseInt(month) == 12) 
                  row.push({day: increment, month: this.getNextMonth(month), year: parseInt(year) + 1});
                else
                  row.push({day: increment, month: this.getNextMonth(month), year: year});
                increment++;
                let t = row;
              }
            } 
          }
          this.calendarDays.push(row);
        }
      },
      setPreviousMonth() {
        let activeYear = this.activeDate.substr(0, 4);
        let activeMonth = this.activeDate.substr(4, 2);
        if (parseInt(activeMonth) == 1) {
          activeYear = parseInt(activeYear) - 1;
          activeMonth = '12';
        } else {
          activeMonth = ('0' + (parseInt(activeMonth) - 1)).slice(-2);
        }
        this.activeDate = activeYear + activeMonth;
        this.populateCalendar(activeYear, activeMonth);
        this.animeSwipeRight()
      },
      setNextMonth() {
        let activeYear = this.activeDate.substr(0, 4);
        let activeMonth = this.activeDate.substr(4, 2);
        if (parseInt(activeMonth) == 12) {
          activeYear = parseInt(activeYear) + 1;
          activeMonth = '01';
        } else {
          activeMonth = ('0' + (parseInt(activeMonth) + 1)).slice(-2);
        }
        this.activeDate = activeYear + activeMonth;
        this.populateCalendar(activeYear, activeMonth);
        this.animeSwipeLeft()
      },
      selectDay(cell) {
        if (cell.month == this.getPreviousMonth(this.activeDate.substr(4, 2))) {
          this.setPreviousMonth();
        } else if (cell.month == this.getNextMonth(this.activeDate.substr(4, 2))) {
          this.setNextMonth();
        }
        this.activeDay = ("0" + cell.day).slice(-2) + cell.month + cell.year;
        this.date = ("0" + cell.day).slice(-2) + '/' + cell.month + '/' + cell.year;
        selectedDate = ("0" + cell.day).slice(-2) + '/' + cell.month + '/' + cell.year;
  
      },
      isSelected(cell) {
        if (("0" + cell.day).slice(-2) + cell.month + cell.year == this.activeDay)
          return true;
      },
      isDisabled(cell) {
        if (parseInt(cell.month) !== parseInt(this.activeDate.substr(4, 2)))
          return true;
      },
      animeSwipeLeft() {
        this.swipeLeft = true;
        setTimeout(() => {
          this.swipeLeft = false;
        }, 300)
      },
      animeSwipeRight() {
        this.swipeRight = true;
        setTimeout(() => {
          this.swipeRight = false;
        }, 300)
      }
    },
    mounted() {
      this.populateCalendar(2023, this.getCurrentMonth());
      this.activeDate = this.getCurrentYear() + this.getCurrentMonth();
    }
  })
  
  const vm = new Vue({
    el: "#app",
  });
  
  
  
  
   

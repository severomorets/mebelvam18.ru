import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { ThanksComponent } from './popups/thanks/thanks.component';
import { SlidersComponent } from './components/sliders/sliders.component';
import { SendRequestComponent } from './popups/send-request/send-request.component';

@NgModule({
  declarations: [
    AppComponent,
    ThanksComponent,
    SlidersComponent,
    SendRequestComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

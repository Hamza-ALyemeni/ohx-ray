@extends('layouts.layout')
@section('content')
<div class="content">
        <div style="display: flex; flex-direction: row; justify-content: space-between; margin: 8px; align-items: center;">
          <h3>Landing Page Content</h3>
          <div class="filter-by-dropdown w-50">
            <button class="button ui" style="margin: 8px;">Reset Edits</button>
            <button class="button ui" style="margin: 8px;">Save All Changes</button>
          </div>
        </div>
        <div class="landing-container" style="margin-left: 5px; margin-right: 5px;">
          <div class="landing-content mb-2">
            <div class="landing-header">
              <p>Header</p>
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="landing-details">
              <div class="landing-items">
                <p>Home</p>
              </div>
              <div class="landing-items">
                <p>About us</p>
              </div>
              <div class="landing-items">
                <p>Contact us</p>
              </div>
              <div class="landing-items">
                <p>FAQ</p>
              </div>
            </div>
          </div>

          <div class="landing-content mb-2">
            <div class="landing-header">
              <p>Section #2</p>
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="landing-details">
              <div class="landing-items">
                <p>Data 1</p>
              </div>
              <div class="landing-items">
                <p>Data 2</p>
              </div>
              <div class="landing-items">
                <p>Data 3</p>
              </div>
              <div class="landing-items">
                <p>Data 4</p>
              </div>
            </div>
          </div>

          <div class="landing-content mb-2">
            <div class="landing-header">
              <p>Section #3</p>
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="landing-details">
              <div class="landing-items">
                <p>Mobbile App Links - Android</p>
              </div>
              <div class="landing-items">
                <p>Mobile App Links - IOS</p>
              </div>
            </div>
          </div>

          <div class="landing-content mb-2">
            <div class="landing-header">
              <p>Footer</p>
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="landing-details">
              <div class="landing-items">
                <p>About</p>
              </div>
              <div class="landing-items">
                <p>Quick Links</p>
              </div>
              <div class="landing-items">
                <p>Social media Accounts</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection

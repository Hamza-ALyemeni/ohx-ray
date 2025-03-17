@extends('layouts.layout')
@section('content')
<div class="content">
        <a class="go-backBtn" href="./companies.html">
          <i class="fas fa-angle-left"></i>
          <p>Back</p>
        </a>
        <div class="hr-style2"></div>
          <div class="ui bottom attached active tab segment" data-tab="first">
            <div class="accountForm">
              <div class="ui stackable grid">
                <div class="two column row">
                  <div class="three wide column">
                    <div class="empInfo">
                      <p>Company Profile</p>
                    </div>
                  </div>
                  <div class="thirteen wide column" id="accountForm">
                    <div class="card2 mb-2">
                      <div class="main-info-header">
                        <h4>Main Info</h4>
                      </div>
                      <div class="account-img">
                        <image src="./imgs/image.png" alt="Account Photo" />
                        <div class="upload-imgInput">
                          <input type="file" id="img-input" accept="image/*" />
                          <label htmlFor="img-input">
                            <i class="fas fa-camera"></i>
                          </label>
                        </div>
                      </div>
                      <div class="mainInfo-form">
                        <div class="ui form">
                          <div class="two fields">
                            <div class="field">
                              <label>Company Name</label>
                              <input
                                type="text"
                                placeholder="Company Name"
                                required
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card2 mb-2">
                      <div class="main-info-header">
                        <h4>Basic Info</h4>
                      </div>
                      <div class="mainInfo-form">
                        <div class="ui form">
                          <div class="two fields">
                            <div class="field">
                              <label>select nationality</label>
                              <div class="ui selection dropdown drop">
                                <input type="hidden" name="country" />
                                <i class="dropdown icon"></i>
                                <div class="default text">country</div>
                                <div class="menu">
                                  <div class="item" data-value="1">Egypt</div>
                                  <div class="item" data-value="0">USA</div>
                                </div>
                              </div>
                            </div>
                            <div class="field">
                              <label>location</label>
                              <input type="text" placeholder="location" />
                            </div>
                          </div>
                          <div
                            class="field"
                            style="margin-top: 10px; margin-bottom: 20px"
                          >
                            <label>address</label>
                            <input
                              type="text"
                              placeholder="address goes here"
                            />
                          </div>
                          <div
                            class="field"
                            style="margin-top: 10px; margin-bottom: 20px"
                          >
                            <label>phone number</label>
                            <input type="text" placeholder="+96612345678" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card2 mb-2">
                      <div class="ui form">
                        <div
                          class="field"
                          style="margin-top: 10px; margin-bottom: 20px"
                        >
                          <label>email address</label>
                          <input
                            type="email"
                            placeholder="ahmed_ali@gmail.com"
                          />
                        </div>
                        <div
                          class="field"
                          style="margin-top: 10px; margin-bottom: 20px"
                        >
                          <label>Add new password</label>
                          <input type="password" />
                        </div>
                        <div
                          class="field"
                          style="margin-top: 10px; margin-bottom: 20px"
                        >
                          <label>confirm new password</label>
                          <input type="password" />
                        </div>
                      </div>
                    </div>
                    <div style="float: right">
                      <button class="ui negative button mb-2">
                        Save Changes
                      </button>
                      <button class="ui button mb-2">Discard Changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    @endsection

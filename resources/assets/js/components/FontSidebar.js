import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';
import ReactSVG from 'react-svg';
import CopyToClipboard from 'react-copy-to-clipboard';
import NotificationSystem from 'react-notification-system';
import { deleteFont } from '../reducers/Bridge/BridgeApiCalls';
import { paramsChecker, isPublic } from '../helpers';

class FontSidebar extends Component {

  constructor(props) {
    super(props);

    this.notificationSystem = null;

    this.state = {
      margin: 0
    };

    this.openSettings = this.openSettings.bind(this);
    this.openPrimary = this.openPrimary.bind(this);
    this.addNotification = this.addNotification.bind(this);
    this.deleteFont = this.deleteFont.bind(this);
    this.weightToText = this.weightToText.bind(this);
  }

  componentDidMount() {
    this.notificationSystem = this.refs.notificationSystem;
  }

  addNotification(){
    this.notificationSystem.addNotification({
      message: 'Link copied to clipboard ',
      level: 'success'
    });
  }

  openSettings() {
    this.setState((prevState, _) => {
      return {margin: 300}
    })
  }

  openPrimary() {
    this.setState((prevState, _) => {
      return {margin: 0}
    })
  }

  deleteFont() {
    const { deleteFont, bridge, font, history } = this.props;
    if(deleteFont){
      history.replace('/project/' + bridge.id);
      deleteFont(bridge.id, font.id);
    }
  }

  weightToText(weight) {
    if(weight){
      return weight.replace('100', "Thin ")
        .replace('200', "Ultra Thin ")
        .replace('300', "Light ")
        .replace('400', "Regular ")
        .replace('500', "Medium ")
        .replace('600', "Semi Bold ")
        .replace('700', "Bold ")
        .replace('800', "Ultra Bold ")
        .replace('900', "Black ");
    }
    return weight;
  }

  render() {

    const openSettings = this.openSettings;
    const openPrimary = this.openPrimary;
    const addNotification = this.addNotification;
    const deleteFont = this.deleteFont;


    const isPub = isPublic();

    const { margin, fontLink } = this.state;
    const marginStyle = "-" + margin + "px";

    const { font } = this.props;
    console.log(font);
    const weight = this.weightToText(font.variant.variant);

    let settings = null;
    if(!isPub){
      settings = (
          <div className="settings">
              <div className="buttons">
                  <a className="button-outline-delete settings-button"
                     onClick={deleteFont}>DELETE</a>
              </div>
          </div>
      );
    }

    if(!font)
      return <div> </div>;

    return (
        <div className="bm-item-list sidebar">
            <div className="sidebar-padding">
                <div className="header">
                    <span>Use Font</span>
                </div>
                {settings}
            </div>
            <div id="sidebar-hr">
                <hr/>
            </div>
            <div className="sidebar-client sidebar-margin-top">
                <div className="sidebar-section">
                    <div className="title">
                                <span>
                                    SOURCE FILE
                                </span>
                        <a className="download-icon" href={font.variant.link}
                           download={font.variant.font_family.family + " " + font.variant.variant}>
                            <i className="fas fa-download"/>
                        </a>
                    </div>
                </div>
            </div>
            <div className="sidebar-client sidebar-margin-top">
                <div className="sidebar-section-url">
                    <div className="sidebar-little-title">FONT URL</div>
                    <div className="url url-darker">
                        <input type="text"
                        defaultValue={`${font.variant.link}`.substring(0,59)}/>
                        <span id="copy-to-clip">
                                        <CopyToClipboard
                                            text={font.variant.link}
                                            className="clipboard" onCopy={() => {
                                            addNotification()
                                        }}>
                                                <span id="icon">
                                                    <i className="far fa-copy"/>
                                                </span>
                                        </CopyToClipboard>
                                    </span>
                    </div>
                </div>
            </div>
            <div className="sidebar-client sidebar-margin-top">
                <div>
                    <div className="sidebar-section-img-info">
                        <div className="sidebar-image-info">
                            <div className="sidebar-little-title">FONT FAMILY</div>
                            <div className="info info-darker">{font.variant.font_family.family}</div>
                        </div>
                        <div className="sidebar-image-info">
                            <div className="sidebar-little-title">WEIGHT</div>
                            <div className="info info-darker">{weight}</div>
                        </div>
                    </div>
                </div>
            </div>
            <NotificationSystem ref="notificationSystem"/>
        </div>
    );

  }

}

FontSidebar.propTypes = {
  font: PropTypes.shape({
    id: PropTypes.number
  })
};

const dispatchToProps = (dispatch) => {
  return bindActionCreators({
    deleteFont
  }, dispatch)
};

export default connect(state => state, dispatchToProps)(FontSidebar);


{/*<div className="font-sidebar">*/}
    {/*<div className="primary-view" style={{marginLeft: marginStyle}}>*/}
        {/*<div className="head">*/}
            {/*{ settingsButton }*/}
            {/*<h3>Fonts</h3>*/}
        {/*</div>*/}
        {/*<div className="content">*/}
            {/*<section>*/}
                {/*<h4>Source File</h4><a className="button" href={font.variant.link} download={font.variant.font_family.family + " " + font.variant.variant}>Download</a>*/}
                {/*<div className="clipboard_and_text">*/}
                    {/*<div>*/}
                        {/*<CopyToClipboard text={font.variant.link} className="clipboard" onCopy={() => {addNotification()}}>*/}
                    {/*<span><ReactSVG*/}
                        {/*path="/images/clipboard.svg"*/}
                    {/*/></span>*/}
                        {/*</CopyToClipboard>*/}
                    {/*</div>*/}
                    {/*<p>{font.variant.link}</p>*/}
                {/*</div>*/}
            {/*</section>*/}
            {/*<section>*/}
                {/*<h4>Info</h4>*/}
                {/*<div className="text">*/}
                    {/*<p><span className="prefix">Font Family</span> <span className="primar">{font.variant.font_family.family}</span></p>*/}
                    {/*<p><span className="prefix">Weight</span> <span className="primar">{weight}</span></p>*/}
                {/*</div>*/}
            {/*</section>*/}
        {/*</div>*/}
    {/*</div>*/}
    {/*<div className="settings">*/}
        {/*<div className="head">*/}
            {/*<div onClick={openPrimary}>*/}
                {/*<ReactSVG*/}
                    {/*path="/images/close.svg"*/}
                {/*/>*/}
            {/*</div>*/}
            {/*<h3>Font Settings</h3>*/}
        {/*</div>*/}
        {/*<div className="content">*/}
            {/*<section>*/}
                {/*<div className="text">*/}
                    {/*<a className="button" onClick={deleteFont}>Delete</a>*/}
                {/*</div>*/}
            {/*</section>*/}
        {/*</div>*/}
    {/*</div>*/}
    {/*<NotificationSystem ref="notificationSystem" />*/}
{/*</div>*/}

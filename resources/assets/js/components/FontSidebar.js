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
      history.replace('/bridge/' + bridge.id);
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

    let settingsButton = null;
    if(!isPub){
      settingsButton = (<div onClick={openSettings}>
        <ReactSVG
          path="/images/settings.svg"
        />
      </div>);
    }

    if(!font)
      return <div> </div>;

    return (
      <div className="font-sidebar">
        <div className="primary-view" style={{marginLeft: marginStyle}}>
          <div className="head">
            { settingsButton }
            <h3>Fonts</h3>
          </div>
          <div className="content">
            <section>
              <h4>Source File</h4><a className="button" href={font.variant.link} download={font.variant.font_family.family + " " + font.variant.variant}>Download</a>
              <div className="clipboard_and_text">
                <div>
                  <CopyToClipboard text={font.variant.link} className="clipboard" onCopy={() => {addNotification()}}>
                    <span><ReactSVG
                      path="/images/clipboard.svg"
                    /></span>
                  </CopyToClipboard>
                </div>
                <p>{font.variant.link}</p>
              </div>
            </section>
            <section>
              <h4>Info</h4>
              <div className="text">
                <p><span className="prefix">Font Family</span> <span className="primar">{font.variant.font_family.family}</span></p>
                <p><span className="prefix">Weight</span> <span className="primar">{weight}</span></p>
              </div>
            </section>
          </div>
        </div>
        <div className="settings">
          <div className="head">
            <div onClick={openPrimary}>
              <ReactSVG
                path="/images/close.svg"
              />
            </div>
            <h3>Font Settings</h3>
          </div>
          <div className="content">
            <section>
              <div className="text">
                <a className="button" onClick={deleteFont}>Delete</a>
              </div>
            </section>
          </div>
        </div>
        <NotificationSystem ref="notificationSystem" />
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
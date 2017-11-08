import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';
import ReactSVG from 'react-svg';
import CopyToClipboard from 'react-copy-to-clipboard';
import NotificationSystem from 'react-notification-system';
import { deleteColor } from '../reducers/Bridge/BridgeApiCalls';
import { paramsChecker, isPublic } from '../helpers';

class ColorSidebar extends Component {

  constructor(props) {
    super(props);

    this.notificationSystem = null;

    this.state = {
      margin: 0
    };

    this.openSettings = this.openSettings.bind(this);
    this.openPrimary = this.openPrimary.bind(this);
    this.addNotification = this.addNotification.bind(this);
    this.deleteColor = this.deleteColor.bind(this);
  }

  componentDidMount() {
    this.notificationSystem = this.refs.notificationSystem;
  }

  addNotification(){
    this.notificationSystem.addNotification({
      message: 'Color copied ',
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

  deleteColor() {
    const { deleteColor, bridge, color, history } = this.props;
    if(deleteColor()){
      history.replace('/project/' + bridge.id);
      deleteColor(bridge.id, color.id);
    }
  }

  render() {

    const openSettings = this.openSettings;
    const openPrimary = this.openPrimary;
    const addNotification = this.addNotification;
    const deleteColor = this.deleteColor;
    const isPub = isPublic();

    const { margin } = this.state;
    const marginStyle = "-" + margin + "px";

    const { color } = this.props;

    let settingsButton = null;
    if(!isPub){
      settingsButton = (<div onClick={openSettings}>
        <ReactSVG
          path="/images/settings.svg"
        />
      </div>);
    }

    if(!color)
      return <div> </div>;

    return (
      <div className="font-sidebar">
        <div className="primary-view" style={{marginLeft: marginStyle}}>
          <div className="head">
            { settingsButton }
            <h3>Color</h3>
          </div>
          <div className="content">
            <section>
              <div className="clipboard_and_text">
                <div>
                  <CopyToClipboard text={"#" + color.hex} className="clipboard" onCopy={() => {addNotification()}}>
                    <span><ReactSVG
                      path="/images/clipboard.svg"
                    /></span>
                  </CopyToClipboard>
                </div>
                <p>{"#" + color.hex}</p>
              </div>
              <div className="clipboard_and_text">
                <div>
                  <CopyToClipboard text={"rgb(" + color.rgb.replace(" ", ", ") + ")"} className="clipboard" onCopy={() => {addNotification()}}>
                    <span><ReactSVG
                      path="/images/clipboard.svg"
                    /></span>
                  </CopyToClipboard>
                </div>
                <p>{"rgb(" + color.rgb.replace(" ", ", ") + ")"}</p>
              </div>
              <div className="clipboard_and_text">
                <div>
                  <CopyToClipboard text={"#" + color.hex} className="clipboard" onCopy={() => {addNotification()}}>
                    <span><ReactSVG
                      path="/images/clipboard.svg"
                    /></span>
                  </CopyToClipboard>
                </div>
                <p>{"#" + color.hex}</p>
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
            <h3>Color Settings</h3>
          </div>
          <div className="content">
            <section>
              <div className="text">
                <a className="button" onClick={deleteColor}>Delete</a>
              </div>
            </section>
          </div>
        </div>
        <NotificationSystem ref="notificationSystem" />
      </div>
    );

  }

}

ColorSidebar.propTypes = {
  color: PropTypes.shape({
    id: PropTypes.number
  })
};

const dispatchToProps = (dispatch) => {
  return bindActionCreators({
    deleteColor
  }, dispatch)
};

export default connect(state => state, dispatchToProps)(ColorSidebar);
import React, { Component } from 'react';
import CopyToClipboard from 'react-copy-to-clipboard';
import NotificationSystem from 'react-notification-system';
import ReactSVG from 'react-svg';
import DebounceInput from 'react-debounce-input';

class LinkClipboard extends Component{

  constructor(props) {
    super(props);
    this.notificationSystem = null;
    this.addNotification = this.addNotification.bind(this);
  }

  componentDidMount() {
    this.notificationSystem = this.refs.notificationSystem;
  }

  addNotification(){
    console.log(this.notificationSystem);
    this.notificationSystem.addNotification({
      message: 'Link copied to clipboard ',
      level: 'success'
    });
  }

  render() {

    const addNotification = this.addNotification;

    const { bridge, publicBridgePath, updateSlug} = this.props;

    return (
      <div className="link">
        <CopyToClipboard text={publicBridgePath + bridge.slug} className="clipboard" onCopy={() => {addNotification()}}>
                            <span>
                              <ReactSVG
                                path="/images/clipboard.svg"
                              />
                            </span>
        </CopyToClipboard>
        <span>{publicBridgePath}</span>
        <DebounceInput
          value={bridge.slug || ''}
          className="input-ghost background-light-gray "
          style={{fontSize: '16px', color: '#686961'}}
          debounceTimeout="500"
          minLength="4" onChange={updateSlug}
        />
        <NotificationSystem ref="notificationSystem" />
      </div>
    );

  }

}

export default LinkClipboard;

// TODO: SHOW background-light-gray only when admin

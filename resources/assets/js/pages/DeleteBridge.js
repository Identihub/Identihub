import React, { Component } from 'react';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';
import { deleteBridge } from '../reducers/Bridge/BridgeApiCalls';

export class DeleteBridge extends Component {

  constructor(props) {
    super(props);

    this.state = {
      id: props.match.params.id,
    };

    this.deleteBridge = this.deleteBridge.bind(this);
    this.goBack = this.goBack.bind(this);
  }

  deleteBridge() {
    this.props.deleteBridge(this.state.id);
    this.goBack();
  }

  goBack() {
    this.props.history.goBack();
  }

  render() {

    const { deleteBridge, goBack } = this;

    return (
      <div className="delete-bridge">
        <span className="overlay" onClick={goBack}> </span>
        <div className="message-box">
          <h2>Are you sure you want to delete it?</h2>
          <div>
            <a className="button" onClick={deleteBridge}>Yes</a>
            <a className="button" onClick={goBack}>No</a>
          </div>
        </div>
      </div>
    );
  }

}

const dispatchToProps = (dispatch) => {
  return bindActionCreators({
    deleteBridge
  }, dispatch)
};

export default connect(state => state, dispatchToProps)(DeleteBridge);
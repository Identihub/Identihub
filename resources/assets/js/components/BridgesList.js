import React, { Component } from 'react';
import BridgeCard from './BridgeCard';
import EmptyCard from './EmptyCard';
import CSSTransitionGroup from 'react-transition-group/CSSTransitionGroup';

class BridgesList extends Component{

  render() {

      const { bridges } = this.props;

      return (
          <div>
              <h1>Projects</h1>
              <CSSTransitionGroup
                  component="div"
                  className="bridge-list"
                  transitionName="example"
                  transitionEnterTimeout={300}
                  transitionLeaveTimeout={300}>
                  <EmptyCard/>
                  {
                      bridges.map(bridge => (
                          <BridgeCard key={bridge.id} bridge={bridge}/>
                      ))
                  }
              </CSSTransitionGroup>
          </div>
      );
    }
}



export default BridgesList;
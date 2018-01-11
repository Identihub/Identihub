import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {DragSource, DropTarget} from 'react-dnd';
import {findDOMNode} from 'react-dom';
import {dropTargetFlow, getColorBrightness} from '../helpers';
import {Link} from 'react-router-dom';
import {isPublic} from '../helpers';

class ColorCard extends Component {
    constructor() {
        super();

        this.state = {
            infoColor: "#000",
        }
    }

    componentDidMount() {
        const infoColor = this.props.card ? this.props.card.hex : undefined;

        if (infoColor && getColorBrightness(infoColor) < 150) {
            // pick a different colour
            this.setState({
                infoColor: "#FFF",
            });

        }
    }


    render() {
        const isPub = isPublic();
        const {card, isDragging, connectDragSource, connectDropTarget, bridge} = this.props;
        const opacity = isDragging ? 0.1 : 1;
        // console.log(card);

        return connectDragSource(connectDropTarget(
            <div
                className="item card color-card"
                ref={(div) => {
                    this.card = div;
                }}
                style={{backgroundColor: "#" + card.hex, opacity: opacity}}
            >
                <Link to={'/project/' + bridge.id + '/view/color/element/' + card.id}>
                    <img src="/images/move-handler.svg" className="move-handler" width="22" />
                </Link>
                <span id="card-color-info" style={{color: this.state.infoColor}}>
                    <div className="rgb">
                        {card.rgb.split(" ").map((a, i) => (
                            <span>
                                {i === 0
                                    ? <span className="rgb-span">
                                        <span id="rgb-text">R</span>
                                        <span id="rgb-number">{a}</span>
                                      </span>
                                    : null}
                                {i === 1
                                    ? <span className="rgb-span">
                                        <span id="rgb-text">R</span>
                                        <span id="rgb-number">{a}</span>
                                    </span>
                                    : null}
                                {i === 2
                                    ? <span className="rgb-span">
                                        <span id="rgb-text">R</span>
                                        <span id="rgb-number">{a}</span>
                                      </span>
                                    : null}
                            </span>
                        ))}
                     </div>
                    <div className="hex">
                        #{card.hex}
                    </div>
              </span>
            </div>
        ));
        if (!isPub) {
        } else {
            return (
                <div className="item card" style={{backgroundColor: "#" + card.hex, opacity: opacity}}>
                    <Link to={'/view/color/element/' + card.id}>
                    </Link>
                </div>
            );
        }

    }
}

export default dropTargetFlow("COLOR")(ColorCard);
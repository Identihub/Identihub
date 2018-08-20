import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import Section from '../Section';
import WritingCard from './WritingCard';
import {bindActionCreators} from "redux";

class WritingSectionRow extends Component {

    constructor(props) {
        super(props);

        this.state = {
            writings: []
        };
    }

    componentWillReceiveProps(nextProps) {
        this.updateLocalState(nextProps);
    }

    componentWillMount() {
        this.updateLocalState(this.props);
    }

    updateLocalState(props) {
        this.setState({
            writings: props.writings
        });
    }

    render() {
        const {
            bridge,
            section,
            emptyStateText,
            writings,
            connectDropTarget
        } = this.props;

        return <div>
            <Section
                bridge={bridge}
                section={section}
                isActive={false}
                emptyStateText={emptyStateText}
                hasSidebar={false}>
                {
                    writings.filter(writing => (writing.section_id === section.id)).sort((a, b) => (a.order - b.order)).map(writing => {
                        return (
                            <WritingCard
                                key={writing.id}
                                index={writing.order}
                                listId={writing.section_id}
                                card={writing}
                                bridge={bridge}/>
                        )
                    })
                }
            </Section>
        </div>;
    }
}

WritingSectionRow.propTypes = {
    bridge: PropTypes.shape({
        id: PropTypes.integer
    }).isRequired,
    section: PropTypes.shape({
        id: PropTypes.number,
        order: PropTypes.number,
        title: PropTypes.string,
        description: PropTypes.string
    }).isRequired,
    writings: PropTypes.arrayOf(PropTypes.shape({
        id: PropTypes.number,
        section_id: PropTypes.number,
        order: PropTypes.number
    })).isRequired,
    emptyStateText: PropTypes.string.isRequired
};


const dispatchToProps = (dispatch) => {
    return bindActionCreators({}, dispatch)
};

export default connect(state => state, dispatchToProps)(WritingSectionRow);
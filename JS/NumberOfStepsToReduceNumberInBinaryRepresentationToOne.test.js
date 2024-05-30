/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numSteps } from './NumberOfStepsToReduceNumberInBinaryRepresentationToOne.js'

TEST('Starting NumberOfStepsToReduceNumberInBinaryRepresentationToOne test...', (t) => {
    //Test 1
    let want = 6
    let got = numSteps( "1101" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = numSteps( "10" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = numSteps( "1" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})

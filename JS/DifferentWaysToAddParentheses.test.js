/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { diffWaysToCompute } from './DifferentWaysToAddParentheses.js'

TEST('Starting DifferentWaysToAddParentheses test...', (t) => {
    //Test 1
    let want = [0,2]
    let got = diffWaysToCompute( "2-1-1" )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [-34,-14,-10,-10,10]
    got = diffWaysToCompute( "2*3-4*5" )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})

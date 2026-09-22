/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { checkOverlap } from './CircleAndRectangleOverlapping.js'

TEST('Starting CircleAndRectangleOverlapping test...', (t) => {
    //Test 1
    let want = true
    let got = checkOverlap( 1, 0, 0, 1, -1, 3, 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = checkOverlap( 1, 1, 1, 1, -3, 2, -1 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = true
    got = checkOverlap( 1, 0, 0, -1, 0, 0, 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
